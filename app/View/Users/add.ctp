<div class="users form">
  <?php echo $this->Form->create('User'); ?>
  <fieldset>
    <legend><?php echo __('Add User'); ?></legend>
    <?php
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('email');
	// echo $this->Form->input('role', array(
    // 'options' => array('player' => 'Player', 'mj' => 'Maitre de Jeux')
    // ));
    ?>
  </fieldset>
 <div class="form-control">
  <?php echo $this->Form->submit(__('Submit'), ['class' => 'btn btn-primary pull-right']); ?>
  <?php echo $this->Form->end(); ?>
 <div class="col-lg-2">

  </div>
</div>
</div>