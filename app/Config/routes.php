<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about'));
Router::connect('/changelog', array('controller' => 'pages', 'action' => 'display', 'changelog', 'ext' => 'html'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/:controller/:id', array('action' => 'view'), array('id' => '[0-9]+')
);

/**
 * Atlante
 */
Router::parseExtensions('html', 'rss');
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/news', ['controller' => 'posts', 'action' => 'index', 'ext' => 'html']);
Router::connect('/game', ['controller' => 'scenes', 'action' => 'index', 'game' => true]);
Router::connect('/game/players/', ['controller' => 'players', 'action' => 'show', 'game' => true]);
Router::connect('/admin', ['controller' => 'pages', 'action' => 'display', 'home', 'admin' => true]);
Router::connect('/admin/pages/*', ['controller' => 'pages', 'action' => 'display', 'admin' => true]);

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';


