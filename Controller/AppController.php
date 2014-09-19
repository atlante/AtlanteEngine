<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

  public $scaffold = 'admin';
  public $components = array(
      'Session',
      'Auth' => array(
          'loginAction' => array(
              'controller' => 'users',
              'action' => 'login',
              'admin' => false
          ),
          'loginRedirect' => array(
              'game' => true,
              'controller' => 'players',
              'action' => 'select'
          ),
          'logoutRedirect' => array(
              'controller' => 'pages',
              'action' => 'display',
              'home'
          ),
          'authorize' => 'Controller',
          'authenticate' => array(
              'Form' => array(
                  'scope' => array('User.active' => 1)
              )
          )
      ), 'Language' => array(
          'supportedLanguages' => array(
              'en' => 'eng',
              'fr' => 'fra'
          ),
      ),
      'Cookie', 'DebugKit.Toolbar');
  public $helpers = array('Cache', 'Form' => ['className' => 'BootstrapForm.BootstrapForm'], 'Html', 'Paginator', 'Session', 'Ofbid.Ofbid');

//public $helpers = array('Less.Less');
  public function beforeFilter() {
    if (isset($this->request->params['prefix'])) {
      switch ($this->request->params['prefix']) {
        case 'admin':
          $this->layout = 'admin';
          break;
        case 'game':
          $this->layout = 'game';
          break;
        default:
          $this->layout = 'default';
          break;
      }
    }

    //si utilisateur connecté
    if (!is_null(AuthComponent::user('id'))) {
      switch (AuthComponent::user('id')) {
        case 2:
          $this->theme = 'kuro';
          Configure::write('Config.language', 'fra');

          break;
        case 3:
          $this->theme = 'kuro';
          //Configure::write('Config.language', 'spa');
          break;
        default:
          $this->theme = Configure::read('Game.theme');
          break;
      }
      if (!is_null($this->Session->read('Auth.User.theme'))) {
        //debug('custom: ' . $this->Session->read('Auth.User.theme'));
        $this->theme = $this->Session->read('Auth.User.theme');
      }
    } else {
      $this->theme = Configure::read('Game.theme');
    }
    //recherche si traduction longue dispo
    $locale = Configure::read('Config.language');
    if ($locale && file_exists(APP . 'View' . DS . $locale . DS . $this->viewPath)) {
      // e.g. use /app/View/fra/Pages/tos.ctp instead of /app/View/Pages/tos.ctp
      $this->viewPath = $locale . DS . $this->viewPath;
    }
    if ($this->request->is('ajax')) {
      $this->layout = 'ajax';
    }
  }

  public function isAuthorized($user = null) {
// Any registered user can access public functions
    if (empty($this->request->params['admin'])) {
      return true;
    }

// Only admins can access admin functions
    if (isset($this->request->params['admin'])) {
      return (bool) ($user['role'] === 'admin');
    }

// Default deny
    return false;
  }

}
