<div class="scene-playerslist">
  <button type="button" class="btn btn-default btn-lg center-block" data-toggle="collapse" data-target="#players">
    &diams; Joueurs présents dans ce lieu &diams;
  </button>
  <div id="players" class="collapse in">
    <ul class="list-group">
      <?php foreach ($this->requestAction('/players/sceneplayerslist') as $player) : ?>
        <li class="list-group-item">
          <span style="color:<?php echo $player['Player']['color']; ?>"><?php echo $player['Player']['name']; ?></span>
          <div class="pull-right">
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span>', ['controller' => 'players', 'action' => 'view', $player['Player']['id']], ['escape' => false]); ?>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-comment"></span>', ['controller' => 'players', 'action' => 'speak',$player['Player']['id']], ['escape' => false]); ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>