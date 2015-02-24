<?php
/*
 * Copyright (C) 2014 agentcobra <agentcobra@users.noreply.github.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP PlayersController
 * @author agentcobra <agentcobra@users.noreply.github.com>
 */
class PlayersController extends AppController {

    public function game_give() {
        if ($this->request->is(array('post', 'put'))) {
            debug($this->request->data);
            $sender = $this->Session->read('Player.money');
            $amount = $this->request->data['item']['money'];
            $transaction = array();
            $transaction ['money'] = $amount + $sender;
            debug($transaction);
            $this->Player->id = $this->Session->read('Player.id');
            if ($this->Player->save(array('Player' => $transaction))) {
                $this->Session->setFlash(__('Your money has been updated.'));
                $this->Session->write('Player.money', $transaction['money']); // @todo à refactorer
            } else {
                $this->Session->setFlash(__('Unable to update your money.'));
            }
        }

        $this->set('players', $this->Player->find('list', array(
                    'conditions' => [
                        'Player.scene_id' => $this->Session->read('Player.scene_id'),
                        'NOT' => [
                            'Player.id' => $this->Session->read('Player.id')
                        ]
                    ])
                )
        );
    }

    public function game_move($destination) {
        $this->loadModel('Scene');
        $destination = $this->Scene->findById($destination);
        $this->Player->id = $this->Session->read('Player.id');

        $this->log('Déplacement de ' . $this->Player->id . ' ' . $this->Session->read('Player.scene_id') . '=>' . $destination['Scene']['name'] . '(' . $destination['Scene']['id'] . ')', 'activity');
        $this->Player->saveField('scene_id', $destination['Scene']['id']);
        $this->Session->write('Player.scene_id', $destination['Scene']['id']);

        $this->loadModel('Fa');
        $this->Fa->set('player_id', $this->Session->read('Player.id'));
        $this->Fa->set('content', 'D\'un pas nonchalant, vous vous rendez à <span class="fa-scene">' . $destination['Scene']['name'] . '</span>.');
        $this->Fa->save();

        $this->Session->setFlash(__('Your journey is nearing its end. It was uneventful.'));
        $this->redirect(['controller' => 'scenes']);
    }

    public function game_settings() {
        if ($this->request->is(array('post', 'put'))) {
            $this->Player->id = $this->Session->read('Player.id');
            if ($this->Player->save($this->request->data)) {
                $this->Session->setFlash(__('Your settings has been updated.'));
                $this->Session->write('Player.color', $this->request->data('Player.color')); // @todo à refactorer
                $this->Session->write('Player.picture', $this->request->data('Player.picture')); // @todo à refactorer
                return $this->redirect('/game');
            } else {
                $this->Session->setFlash(__('Unable to update your settings.'));
            }
        }
        if (!$this->request->data) {
            $this->request->data = $this->Player->findById($this->Session->read('Player.id'));
        }
    }

    public function game_speak() {
        if ($this->request->is('post')) {
            $player = $this->Player->find('first', ['conditions' => array('Player.id' => $this->request->data['Player']['player_id'])]);
            $this->loadModel('Fa');
            $transaction = $this->Fa->getDataSource();
            try {
                $transaction->begin();
//from
                $faMsg = ' &diams; Message envoyé de <span class="fa-pseudo" style="color:' . $this->Session->read('Player.color') . ';">' . $this->Session->read('Player.name') . '</span> &diams;<br>';
                $faMsg.=$this->request->data['Player']['content'];
                $this->Fa->save(['Fa' => ['player_id' => $this->request->data['Player']['player_id'], 'content' => $faMsg]]);
//to
                $faMsg = ' &diams; Message envoyé à <span class="fa-pseudo" style="color:' . $player['Player']['color'] . ';">' . $player['Player']['name'] . '</span> &diams;<br>';
                $faMsg.=$this->request->data['Player']['content'];
                $this->Fa->create();
                $this->Fa->save(['Fa' => ['player_id' => $this->Session->read('Player.id'), 'content' => $faMsg]]);

                $transaction->commit();
                $this->Session->setFlash($faMsg);
                $this->redirect(['controller' => 'scenes']);
            } catch (Exception $exc) {
                $transaction->rollback();
                echo $exc->getTraceAsString();
            }
        }
        if (is_int($this->request->params['pass'][0])) {
            $this->Player->id = $this->request->params['pass'][0];
        }
        $this->set('players', $this->Player->find('list', array(
                    'conditions' => [
                        'Player.scene_id' => $this->Session->read('Player.scene_id'),
                        'NOT' => [
                            'Player.id' => $this->Session->read('Player.id')
                        ]
                    ]
                        )
        ));
    }

    public function game_view($id) {
        $player = $this->Player->find('first', array(
            'conditions' => ['Player.id' => $id]
        ));
        $this->set('player', $player);
        $this->set('age', date('Y', time() - strtotime(substr($player['Player']['created'], 0, 10))) - 1970);
    }

    public function add() {

    }

    public function listing() {
        $this->set('players', $this->Player->find('list', [
                    'fields' => array('Player.id', 'Player.name'),
                    'order' => array('Player.name ASC'),
                        //'group' => array('Player.user_id')
        ]));
    }

    public function sceneplayerslist() {
        if (empty($this->request->params['requested'])) {
            throw new ForbiddenException();
        }
        return $this->Player->find('all', [
                    'conditions' => array('Player.scene_id' => $this->Session->read('Player.scene_id')),
                    'fields' => array('Player.id', 'Player.name', 'Player.color')
        ]);
    }

    /**
     * Select your player
     * @throws NotFoundException
     */
    public function select() {
        if ($this->request->is('post')) {
            $player = current($this->Player->find('first', [
                        'conditions' => array('Player.id' => $this->request->data['Player']['id'])
                    ])
            );

            if ($player['user_id'] == AuthComponent::user('id')) {
                $this->Session->write('Player', $player);
            } else {
                throw new NotFoundException(__('Invalid player'));
            }

            $this->redirect(['controller' => 'scenes', 'action' => 'index', 'game' => true]);
        }
        $playerslist = $this->Player->find('all', [
            'fields' => array('Player.id', 'Player.name', 'Player.color', 'Player.picture', 'Player.scene_id','Player.pa'),
            'conditions' => array('Player.user_id =' => AuthComponent::user('id'))
        ]);
        foreach ($playerslist as $player) {
            $players[$player['Player']['id']] = '<img class="img-circle img-responsive" src="' . $player['Player']['picture'] . '"><small class="text-center text-muted" style="color:' . $player['Player']['color'] . ';">' . $player['Player']['name'] . '</small>'. '<span class="fa-scene">  ('. $player['Player']['scene_id'] . ')</span>'. '<span class="badge-pa pull-right">'. $player['Player']['pa'] . '</span>';
        }
        if ($playerslist) {
            $this->set('players', $players);
        } else {
            debug('test');
            $this->log('Erreur selection joueur (' . AuthComponent::user('id') . ')');
            /**
             * @todo A corrigé quand pas de perso dans le compte
             */
            throw new NotFoundException(__('No players found'));
        }
    }

    public function beforeFilter() {
        parent::beforeFilter();
        if (!$this->Session->check('Player') && isset($this->request->params['prefix'])) {
            if ($this->request->params['prefix'] == 'game') {
                $this->redirect(['controller' => 'players', 'action' => 'select', 'game' => false]);
            }
        }
    }

}
