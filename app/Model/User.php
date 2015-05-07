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

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * CakePHP User
 * @author agentcobra <agentcobra@users.noreply.github.com>
 */
class User extends AppModel {

  public $displayField = 'username';
  public $hasMany = ['Player', 'Post'];
  public $validate = array(
      'username' => array(
          'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'A username is required'
          )
      ),
      'password' => array(
          'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'A password is required'
          )
      ),
      'role' => array(
          'valid' => array(
              'rule' => array('inList', array('admin', 'mj', 'player')),
              'message' => 'Please enter a valid role',
              'allowEmpty' => false
          )
      )
  );

  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      $passwordHasher = new SimplePasswordHasher();
      $this->data[$this->alias]['password'] = $passwordHasher->hash(
              $this->data[$this->alias]['password']
      );
    }
    return true;
  }

}
