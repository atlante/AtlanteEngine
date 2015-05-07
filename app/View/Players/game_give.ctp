<?php 


?>

<div class="page-header">
  <h1><?php echo __('Give'); ?></h1>
  <hr>
</div>
<div class="row">
  <div class="col-lg-offset-1 col-lg-9">
		<?php echo $this->Form->create('item'); ?>
		<?php echo $this->Form->input('Player.player_id'); ?>
		<?php echo $this->Form->input('money', ['type' => 'money']); ?>
<div class="form-control">
      <?php echo $this->Form->submit(__('Give'), ['class' => 'btn btn-primary pull-right']); ?>
</div>
  </div>
</div>