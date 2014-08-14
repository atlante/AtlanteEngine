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
 * CakePHP UsersController
 * @author agentcobra <agentcobra@users.noreply.github.com>
 */
class UsersController extends AppController {

  public $scaffold = false;

  public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('logout');
  }

  public function login() {
    //if already logged-in, redirect
    if ($this->Session->check('Auth.User')) {
      $this->redirect($this->Auth->redirect());
    }
    if ($this->request->is('post')) {
      if (isset($_POST['assertion'])) {
        $url = 'https://verifier.login.persona.org/verify';
        $curl = curl_init($url);
        $data = 'assertion=' . $_POST['assertion'] . '&audience=http://agentcobra.hd.free.fr/altergi:80';

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($result);
        die($result);
        if ($response->status == 'okay') {
          $_SESSION['user'] = $response;
        }
      }

      if ($this->Auth->login()) {
        $this->Session->setFlash(__('Welcome, ' . $this->Auth->user('username')));
        return $this->redirect($this->Auth->redirect());
      }
      $this->Session->setFlash(__('Invalid username or password, try again'));
    }
  }

  public function logout() {
    $this->Session->destroy();
    return $this->redirect($this->Auth->logout());
  }

  public function index() {
    $this->User->recursive = 0;
    $this->set('users', $this->paginate());
  }

  public function view($id = null) {
    $this->User->id = $id;
    if (!$this->User->exists()) {
      throw new NotFoundException(__('Invalid user'));
    }
    $this->set('user', $this->User->read(null, $id));
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->User->create();
      if ($this->User->save($this->request->data)) {
        $this->Session->setFlash(__('The user has been saved'));
        return $this->redirect(array('controller' => 'players', 'action' => 'index'));
      }
      $this->Session->setFlash(
              __('The user could not be saved. Please, try again.')
      );
    }
  }

  public function edit($id = null) {
    $this->User->id = $id;
    if (!$this->User->exists()) {
      throw new NotFoundException(__('Invalid user'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->User->save($this->request->data)) {
        $this->Session->setFlash(__('The user has been saved'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(
              __('The user could not be saved. Please, try again.')
      );
    } else {
      $this->request->data = $this->User->read(null, $id);
      unset($this->request->data['User']['password']);
    }
  }

  public function delete($id = null) {
    $this->request->onlyAllow('post');

    $this->User->id = $id;
    if (!$this->User->exists()) {
      throw new NotFoundException(__('Invalid user'));
    }
    if ($this->User->delete()) {
      $this->Session->setFlash(__('User deleted'));
      return $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('User was not deleted'));
    return $this->redirect(array('action' => 'index'));
  }

  public function settings() {
    if ($this->request->is(array('post', 'put'))) {
      $this->User->id = $this->Session->read('Auth.User.id');
      if ($this->User->save($this->request->data)) {
        $this->Session->write('Auth.User.music', $this->request->data('User.music'));
        $this->Session->write('Auth.User.theme', $this->request->data('User.theme'));
        $this->Session->setFlash(__('Your settings has been updated.'));
        return $this->redirect(['action' => 'settings']);
      }
      $this->Session->setFlash(__('Unable to update your post.'));
    }
    if (!$this->request->data) {
      $this->request->data = $this->User->findById($this->Session->read('Auth.User.id'));
    }
  }

}
