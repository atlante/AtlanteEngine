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
 * CakePHP FaController
 * @author agentcobra <agentcobra@users.noreply.github.com>
 */
class FasController extends AppController {

    public $components = array('Paginator');
	
  public function beforeFilter() {
    parent::beforeFilter();
  }

  public function show() {
    $this->paginate = array('Fa' => array(
            'limit' => 500,
            'conditions' => array('Fa.player_id' => $this->Session->read('Player.id')),
            'order' => array(
                'Fa.created' => 'desc'
            )
    ));
    $fa = $this->paginate('Fa');
//    $fa = $this->Fa->find('all', [
//        'conditions' => array('Fa.player_id' => $this->Session->read('Player.id')),
//        'order' => array('Fa.created DESC')
//    ]);

    if ($fa) {
      return $fa;
    } else {
      return array(0 => [
              'Fa' => ['created' => date('Y-m-d H:i:s'), 'content' => __('No action recorded')]
      ]);
    }
  }

}
