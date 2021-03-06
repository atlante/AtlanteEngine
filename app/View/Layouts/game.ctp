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
$cakeDescription = Configure::read('Game.name');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->charset(); ?>
    <?php echo $this->fetch('meta'); ?>
    <title>
      <?php echo $cakeDescription ?>:
      <?php echo $title_for_layout; ?>
    </title>
    <?php echo $this->Html->meta('icon'); ?>
    <!-- Bootstrap -->
    <?php echo $this->Html->css(['bootstrap', 'font-awesome.min', 'csshake.min', 'atlante', 'atlante-font']); ?>
    <?php //echo $this->Less->css('bootstrap'); ?>
    <!--link rel="stylesheet/less" type="text/css" href="<?php echo $this->Html->url('/less/bootstrap.less') ?>" /-->
    <style>
      body{
        padding-top: 100px;
      }
    </style>
    <?php echo $this->fetch('css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php
    echo $this->Html->script(['http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js']);
    ?>
    <![endif]-->
  </head>
  <body>

    <?php //echo $this->element('menu'); ?>
    <?php echo $this->element('game/menu'); ?>
    <div class="container-fluid">
        <?php
        echo $this->Session->flash();
        echo $this->Session->flash('auth');
        ?>
      <?php echo $this->fetch('content'); ?>
    </div>

<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog modal-sm"><div class="modal-content text-center"><i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i></div></div>
</div>
	
    <div id="footer">
      <div class="container">
        <?php echo $this->element('footer'); ?>
        <?php echo $this->Html->link('Changelog', ['controller' => 'pages', 'action' => 'display', 'changelog', 'game' => false]); ?>
		<span id="start-togetherjs" class="btn">Start TogetherJS</span>
        <?php echo $this->element('social'); ?>
      </div>
      <?php //echo $this->Html->image('http://chart.googleapis.com/chart?chs=100x100&amp;cht=qr&amp;chl=http://agentcobra.hd.free.fr' . $this->request->here()) ?>
      <?php echo $this->element('purechat'); ?>
    </div>

    <?php echo $this->element('sql_dump'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo $this->Html->script('jquery-1.11.1.min'); ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->fetch('script'); ?>
	<!-- TogetherJS -->
	<script>
		var TogetherJSConfig_siteName = "<?php echo Configure::read('Game.name'); ?>";
		var TogetherJSConfig_toolName = "<?php echo Configure::read('Game.name'); ?>";
		var TogetherJSConfig_findRoom = "<?php echo Configure::read('Game.name'); ?>";
		TogetherJSConfig_getUserName = function () {return '<?php echo $this->Session->read('Player.name'); ?>';};
		TogetherJSConfig_getUserAvatar = function () {return '<?php echo $this->Session->read('Player.picture'); ?>';};
		TogetherJSConfig_getUserColor = function () {return '<?php echo $this->Session->read('Player.color'); ?>';};
	</script>
	<script src="https://togetherjs.com/togetherjs-min.js"></script>
	<script>
		$(function () {
			$("#start-togetherjs").click(TogetherJS);
		});
	</script>
	<!-- /TogetherJS -->
    <?php echo $this->element('analytics'); ?>
  </body>
</html>
