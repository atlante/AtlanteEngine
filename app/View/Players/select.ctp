<div class="page-header">
  <h1><?php echo __('Select your player'); ?></h1>
</div>
<div class="alert alert-help-users" role="alert">
        <p> Choisissez votre personnage en cliquant sur une vignette.</p>
</div>
<?php echo $this->Html->link(__('Add Player'), ['controller' => 'players', 'action' => 'add', 'game' => false], ['class' => 'btn btn-primary']); ?>
<!--br><iframe width="590" height="32" src="http://www.newgrounds.com/content/embed.php?id=SbWJK" frameborder="0" allowfullscreen></iframe>
-->
<?php echo $this->Form->create('Player'); ?>
<?php
echo $this->Form->radio('id', $players, [
    'separator' => '<!--span class="separator">-</span-->',
    'legend' => __("%s's players", AuthComponent::user('username'))
]);
?>
<noscript>
<?php echo$this->Form->submit(__('Press to play'), ['class' => 'btn btn-primary']); ?>
</noscript>
<?php echo $this->Form->end(); ?>
<?php
echo $this->Html->scriptBlock(
        '$(document).ready(function(){$("input[type=radio]").click(function(){$("#PlayerSelectForm").submit();})});'
        , ['inline' => false]);
?>