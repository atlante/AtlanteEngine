<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo $this->Html->link('', '/', ['class' => 'navbar-brand']); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><?php echo $this->Html->link(__("Help"), ['controller' => 'pages', 'action' => 'display', 'help', 'register', 'game' => false]); ?></li>
        <li><?php
          echo $this->Html->link(__("Users list"), [
              'controller' => 'users',
              'action' => 'listing',
              'game' => false
          ]);
          ?></li>
        <li><?php echo $this->Html->link(__("News from %s", Configure::read('Game.name')), ['controller' => 'news', 'action' => 'index', 'game' => false]); ?></li>
        <li><?php
          echo $this->Html->link(__("Tchat"), [
              'controller' => 'pages',
              'action' => 'irc',
              'game' => false
          ]);
          ?></li>
        <li><?php echo $this->Html->link(__("About"), ['controller' => 'pages', 'action' => 'display', 'about', 'game' => false], ['class' => 'ajax']); ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if (is_null(AuthComponent::user('id'))) : ?>
      <li><?php echo $this->Html->link(__("Connexion"), ['controller' => 'users', 'action' => 'login', 'game' => false], ['data-toggle'=>'modal','data-target'=>'#modal']); ?></li>
        <?php else: ?>
            <li class="blink_me"><?php echo $this->Html->link(__('Play'), ['controller' => 'players', 'action' => 'select', 'game' => false]); ?></li>
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
                <?php $this->Session->read('Auth.User.username'); ?>
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('<i class="fa fa-fw fa-gear"></i> ' . __("Settings"), ['controller' => 'users', 'action' => 'settings', 'game' => false], ['escape' => false]); ?></li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link('<i class="fa fa-fw fa-power-off"></i> ' . __("logout"), ['controller' => 'users', 'action' => 'logout', 'game' => false], ['escape' => false]); ?></li>
              </ul>
            </li>
          <?php endif; ?>
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>