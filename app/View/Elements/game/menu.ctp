<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gamenavbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo $this->Html->link('', '/', ['class' => 'navbar-brand']); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="gamenavbar">
      <ul class="nav navbar-nav ">
		<li class="navbar-text">
		<div class="lvl">Lv.01</div>
	        <?php
            echo '<span class="avatar-nav" style="box-shadow: 0px 0px 15px ' . $this->Session->read('Player.color') . '">' . $this->Html->image($this->Session->read('Player.picture'), [
                'alt' => $this->Session->read('Player.name'),
                #'class' => 'img-circle',
				//'class' => 'avatar-nav',
                'title' => $this->Session->read('Player.name'),
                'height' => 43
            ]);
            ?>
		</li>
        <li class="navbar-text">
          <?php
          echo '<span class="menu-pseudo" style="color:' . $this->Session->read('Player.color') . '">' . $this->Session->read('Player.name');
		  // Sexe du personnage ; donc si c'est &male; c'est que c'est un mec donc on met la span menu-sexe-m ... Sinon on fait menu-sexe-f
		  if ($this->Session->read('Player.sexe') == '&male;') {
          echo '<span class="menu-sexe-m">' . $this->Session->read('Player.sexe') . '</span><br> '; 
		  }
			else {  echo '<span class="menu-sexe-f">' . $this->Session->read('Player.sexe') . '</span><br> ';
			}
          echo '<span class="fa-scene">' . @$scene['name'] .'('. $this->Session->read('Player.scene_id').')'.'</span>';
          ?>
        </li>
        <li class="navbar-text">
          <?php
          echo '<img style="height:60%;width:auto;" class="center-block" src="http://agentcobra.hd.free.fr/altergi/theme/kuro/img/IconArgent.png" alt="CHAKA" title="CHAKA" />';
          echo '<span class="atlante atlante-money">' . $this->Session->read('Player.money') . '</span>';
          ?>
        </li>
        <li class="navbar-text">Points Action
          <div class="progress"> 
            <div class="progress-bar progress-bar-pa bar-pa" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="30" style="width: <?php echo $this->Session->read('Player.pa');//ça marche pas je sais; je prépare le terrain ?>;">
            <span class="text-progress-bar"> <?php echo $this->Session->read('Player.pa') ;?> <span class="text-progress-bar-defaultvalue-pa">/ 35</span></span>  
            </div>
          </div>
        </li>
        <li class="navbar-text">Points de Vie
          <div class="progress">
            <div class="progress-bar progress-bar-life" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
              <span class="text-progress-bar">50 <span class="text-progress-bar-defaultvalue-life">/ 50</span></span>
            </div>
          </div>
        </li>
		<li class="navbar-text">Points Mana
          <div class="progress">
            <div class="progress-bar progress-bar-mana" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
             <span class="text-progress-bar">20 <span class="text-progress-bar-defaultvalue-mana">/ 20</span></span>
            </div>
          </div>
        </li>
        <!--<li class="navbar-text">Points d'Exp
          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
              <span class="sr-only">1% Complete</span>
            </div>
          </div>
        </li-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="scene-back"><?php echo $this->Html->link('<span class="fa fa-share"></span>' . __('Back to scene'), ['controller' => 'scenes', 'action' => 'index', 'game' => true], ['class' => 'hidden-xs hidden-md', 'escape' => false]); ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-fw fa-gear"></i>
            <?php $this->Session->read('Auth.User.username'); ?>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('<i class="fa fa-fw fa-group"></i> ' . __("Switch characters"), ['controller' => 'players', 'action' => 'select', 'game' => false], ['escape' => false]); ?></li>
            <li><?php echo $this->Html->link('<i class="fa fa-fw fa-wrench"></i> ' . __("Character Settings"), ['controller' => 'players', 'action' => 'settings', 'game' => true], ['escape' => false]); ?></li>
            <li class="divider"></li>
            <li><?php echo $this->Html->link('<i class="fa fa-fw fa-gear"></i> ' . __("Account Settings"), ['controller' => 'users', 'action' => 'settings', 'game' => false], ['escape' => false]); ?></li>
            <li><?php echo $this->Html->link('<i class="fa fa-fw fa-sign-out"></i> ' . __("logout"), ['controller' => 'users', 'action' => 'logout', 'game' => false], ['escape' => false]); ?></li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link('<i class="fa fa-fw fa-globe"></i> ' . __("Admin"), ['controller' => 'admin', 'action' => 'pages', 'game'  => false], ['escape' => false]); ?></li>
		 </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>