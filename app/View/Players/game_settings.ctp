<div class="page-header">
  <h1><?php echo __('Players Settings'); ?></h1>
</div>
<hr>
<div class="row">
  <div class="col-lg-offset-1 col-lg-9">
    <?php echo $this->Form->create('Player'); ?>
    <div class="alert alert-help-users" role="alert">
      <p> Choisissez la couleur de votre <strong>Pseudo</strong>. Evitez les couleurs trop sombres.</p>
    </div>
    <?php echo $this->Form->input('color', ['type' => 'color']); ?>
    <div class="alert alert-help-users" role="alert">
      <p> Choisissez votre <strong>Avatar</strong> en indiquant l'URL ci-dessous. </p>
    </div>
    <?php echo $this->Form->input('picture', ['type' => 'url']); ?>
	<br>
	<h1> Description </h1>
	<div class="alert alert-help-users" role="alert">
      <p> C'est ici que vous décrirez votre <strong>Personnage</strong>. Les descriptions sont visibles par tous les joueurs. </p>
    </div>
	
    <div class="form-control">
      <?php echo $this->Form->submit(__('Submit'), ['class' => 'btn btn-primary pull-right']); ?>
    </div>
    <?php echo $this->Form->end(); ?>
  </div>
  <div class="col-lg-2">
    <div class="avatar-preview">
      <img src= "<?php echo $this->Session->read('Player.picture'); ?>" alt="Your Picture" class="img-preview" style=" box-shadow: 0px 0px 40px <?php $this->Session->read('Player.color')?> ; " >
    </div>
  </div>
</div>