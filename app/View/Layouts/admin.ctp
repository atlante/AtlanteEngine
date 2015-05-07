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
/**
 *
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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $this->fetch('meta'); ?>
    <title>
      <?php echo Configure::read('Game.name'); ?>:
      <?php echo $title_for_layout; ?> (Admin)
    </title>
    <?php echo $this->Html->meta('icon'); ?>
    <?php
    echo $this->Html->css(['bootstrap.min',
        'sb-admin',
        'font-awesome',
        'morris',
        'atlante-admin']);
    ?>
  </head>

  <body>

    <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('<i class="fa fa-arrow-circle-o-left"></i> Retour site', '/', ['class' => 'navbar-brand', 'escape' => false]); ?>
		   <?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i>	 Retour au Jeu', '/game', ['class' => 'navbar-brand', 'escape' => false]); ?>
<span class="navbar-brand"> <span class="navbar-adminde"> <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Panneau d'Administration de</span> <?php echo Configure::read('Game.name'); ?></span>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
          <!--<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
              <li class="message-preview">
                <a href="#">
                  <div class="media">
                    <span class="pull-left">
                      <img class="media-object" src="http://placehold.it/50x50" alt="">
                    </span>
                    <div class="media-body">
                      <h5 class="media-heading"><strong><?php echo $this->Session->read('Auth.User.username'); ?></strong>
                      </h5>
                      <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                      <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="message-preview">
                <a href="#">
                  <div class="media">
                    <span class="pull-left">
                      <img class="media-object" src="http://placehold.it/50x50" alt="">
                    </span>
                    <div class="media-body">
                      <h5 class="media-heading"><strong><?php echo $this->Session->read('Auth.User.username'); ?></strong>
                      </h5>
                      <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                      <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="message-preview">
                <a href="#">
                  <div class="media">
                    <span class="pull-left">
                      <img class="media-object" src="http://placehold.it/50x50" alt="">
                    </span>
                    <div class="media-body">
                      <h5 class="media-heading"><strong><?php echo $this->Session->read('Auth.User.username'); ?></strong>
                      </h5>
                      <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                      <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="message-footer">
                <a href="#">Read All New Messages</a>
              </li>
            </ul>
          </li>-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
              <li>
                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
              </li>
              <li>
                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">View All</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php
              $libravatar = 'http://cdn.libravatar.org/avatar/' . md5($this->Session->read('Auth.User.email')) . '?s=100';
              echo $this->Html->image($libravatar, [
                  'alt' => $this->Session->read('Auth.User.username'),
                  'class' => 'img-circle',
                  'title' => $this->Session->read('Auth.User.username'),
                  'height' => 18
              ]);
              ?>
              <?php echo $this->Session->read('Auth.User.username'); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
              </li>
              <li class="divider"></li>
              <li>
                 <li><?php echo $this->Html->link('<i class="fa fa-fw fa-sign-out"></i> ' . __("Logout"), ['controller' => 'users', 'action' => 'logout', 'game' => false], ['escape' => false]); ?></li>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active">
            <li><?php echo $this->Html->link('<i class="fa fa-fw fa-dashboard"></i> ' . __('Dashboard'), ['controller' => 'pages', 'admin' => true], ['escape' => false]); ?></li>
            <li>
              <a href="#" data-toggle="collapse" data-target="#one"><i class="fa fa-fw fa-book"></i> Game Settings<i class="fa fa-fw fa-caret-down"></i></a>
              <ul id="one" class="collapsed collapse">
                <!--li class="active"><?php echo $this->Html->link(__('Overview'), ['controller' => 'pages']); ?></li-->
                <li><?php echo $this->Html->link(__('Overview'), ['controller' => 'pages', 'admin' => true]); ?></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
			    <li><?php echo $this->Html->link('Posts', ['controller' => 'posts']); ?></li>
              </ul>
            </li>
            <li>
              <a href="#" data-toggle="collapse" data-target="#two"><i class="fa fa-fw fa-compass"></i> Scenes Settings <i class="fa fa-fw fa-caret-down"></i></a>
              <ul id="two" class="collapsed collapse">
                <li><?php echo $this->Html->link('Scenes', ['controller' => 'scenes']); ?></li>
                <li><?php echo $this->Html->link('Paths', ['controller' => 'paths']); ?></li>
                <li class="disabled"><?php echo $this->Html->link('Objects', ['controller' => 'objects']); ?></li>
                <li class="disabled"><?php echo $this->Html->link('Titles', ['controller' => 'titles']); ?></li>
                <li class="disabled"><?php echo $this->Html->link('Abilities', ['controller' => 'abilities']); ?></li>
              </ul>
            </li>
            <li>
              <a href="#" data-toggle="collapse" data-target="#three"><i class="fa fa-fw fa-group"></i> Players Settings <i class="fa fa-fw fa-caret-down"></i></a>
              <ul id="three" class="collapsed collapse">
                <li><?php echo $this->Html->link('Players', ['controller' => 'players']); ?></li>
                <li><?php echo $this->Html->link('Fas', ['controller' => 'fas']); ?></li>
                <li class="disabled"><?php echo $this->Html->link('Users', ['controller' => 'users']); ?></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
        <div class="container-fluid">
          <?php
          echo $this->Session->flash();
          echo $this->Session->flash('auth');
          ?>
          <?php echo $this->fetch('content'); ?>
        </div>
      </div>
      <!-- /#page-wrapper -->

      <?php echo $this->element('footer'); ?>
    </div>
    <!-- /#wrapper -->
    <?php
    echo $this->Html->script(['jquery-1.11.1.min',
        'bootstrap.min']);
    echo $this->fetch('script');
    echo $this->element('analytics');
    ?>

    <!-- Morris Charts JavaScript 
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>-->

  </body>

</html>
