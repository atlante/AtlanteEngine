<?php
// Appel des fichiers javascript nécessaires
echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
//echo $this->Html->script('ckfinder/ckfinder', array('inline' => false));
?>

<div class="page-header">
  <h1><?php echo __('Speak'); ?></h1>
  <hr>
</div>
<div class="row">
  <div class="col-lg-offset-1 col-lg-9">
<?php echo $this->Form->create(); ?>
<?php echo $this->Form->input('player_id', ['type' => 'select', 'label' => __('Players'), 'options' => $players]); ?>
<?php echo $this->Form->input('content', ['type' => 'textarea', 'label' => 'Message', 'class' => 'ckeditor']); ?>
  <div class="form-control">
      <?php echo $this->Form->submit(__('Speak'), ['class' => 'btn btn-primary pull-right']); ?>
    </div>
	  <div class="col-lg-2">

  </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>