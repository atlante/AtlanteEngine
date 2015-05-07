<?php
echo $this->Html->script('bootstrap-switch.min', ['inline' => false]);
echo $this->Html->scriptStart(['inline' => false]);
?>
$("#UserMusic").bootstrapSwitch();
<?php
echo $this->Html->scriptEnd();
?>
<div class="page-header">
  <h1><?php echo __('Settings'); ?></h1>
</div>
<hr>
<div class="row">
  <div class="col-lg-offset-1 col-lg-9">
<?php echo $this->Form->create('User'); ?>
	<div class="alert alert-help-users"" role="alert">
        <p> Changez votre <strong>adresse E-Mail</strong> en l'indiquant ci-dessous.<br> Cependant, votre E-Mail doit contenir des caractères valides. </p>
    </div> 
<?php echo $this->Form->input('email'); ?>
	<div class="alert alert-help-users"" role="alert">
        <p> Vous pouvez choisir si vous voulez activer la <strong>Musique</strong> dans le jeu avec l'interrupteur ci-dessous. </p>
    </div> 
<?php echo $this->Form->input('music', ['type' => 'checkbox']); ?>
	<div class="alert alert-help-users"" role="alert">
        <p> Choisissez votre <strong>Thême</strong> avec la liste déroulante ci-dessous.</p>
    </div> 
<?php
echo $this->Form->input('theme', array(
    'options' => ['Designed by KuroTashi' => array(
            'kuro' => 'Mitsu Kuragari',
            //'green' => 'Arbre [en dev]',
           // 'red' => 'Coccinelle [en dev]'
//            'white' => 'Neige [en dev]'
       // ),
       // 'BootStrap Themes' => array(
            'ac-cyborg' => 'Cyborg',
        //    'ac-lumen' => 'Lumen',
       //     'ac-slate' => 'Slate'
        )
    ],
    'empty' => __('default theme')
));
?>
<div class="form-control">
  <?php echo $this->Form->submit(__('Submit'), ['class' => 'btn btn-primary pull-right']); ?>
</div>
<?php echo $this->Form->end(); ?>
 <div class="col-lg-2">

  </div>
    </div>
</div>