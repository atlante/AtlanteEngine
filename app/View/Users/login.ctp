<h2 class="text-center">Please sign in</h2>
<?php
echo $this->Form->create('User', array('class' => 'form-horizontal', 'action' => 'login', 'inputDefaults' => array(
        'div' => false,
        'label' => false
)));
?>
  <div class="form-group">
    <label for="UserUsername" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
    <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => __("username"))) ?>
    </div>
  </div>
  <div class="form-group">
    <label for="UserPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
    <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => __("password"))) ?>
    </div>
  </div>
  <!--div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div-->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
	<?php echo $this->Ofbid->imageButton('red', 'mini_'); ?>
    <?php echo $this->Form->submit(__("Enter in %s", Configure::read('Game.name')), array('div' => false, 'class' => 'btn btn-default')); ?>
    <?php echo $this->Html->link(__("Register"), '/users/add', array('class' => 'btn btn-danger')); ?>
    </div>
  </div>
<?php echo $this->Form->end(); ?>