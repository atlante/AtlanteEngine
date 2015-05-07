<div class="page-header">
  <h1><?php echo __('Add Player'); ?></h1>
</div>
<?php echo $this->Form->create('Player'); ?>
<fieldset>
  <legend>Etape 1</legend>
  <?php
  echo $this->Form->input('name');
  echo $this->Form->input('race', array(
      'options' => array('player' => 'Player', 'mj' => 'Maitre de Jeux')
  ));
  echo $this->Form->input('origine', array(
      'options' => array('player' => 'Player', 'mj' => 'Maitre de Jeux')
  ));
  ?>
</fieldset>
<fieldset>
  <legend>Etape 2</legend>
  <?php
  $des = array(rand(2, 12), rand(2, 12), rand(2, 12), rand(2, 12));
  debug($des);
  echo $this->Form->input('agility', array(
      'options' => [$des[0], $des[1], $des[2], $des[3]]
  ));
  echo $this->Form->input('charisma', array(
      'options' => [$des[0], $des[1], $des[2], $des[3]]
  ));
  echo $this->Form->input('might', array(
      'options' => [$des[0], $des[1], $des[2], $des[3]]
  ));
  echo $this->Form->input('mind', array(
      'options' => [$des[0], $des[1], $des[2], $des[3]]
  ));
  ?>
  <!-- l'idée-->
  <table class="table-bordered table-responsive" style="width: 100%">
    <thead>
      <tr>
        <th>Compétence</th>
        <th><?php echo $des[0]; ?></th>
        <th><?php echo $des[1]; ?></th>
        <th><?php echo $des[2]; ?></th>
        <th><?php echo $des[3]; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Agility</td>
        <td><input type="radio" name="d1" value="<?php echo $des[0]; ?>"/></td>
        <td><input type="radio" name="d1" value="<?php echo $des[1]; ?>"/></td>
        <td><input type="radio" name="d1" value="<?php echo $des[2]; ?>"/></td>
        <td><input type="radio" name="d1" value="<?php echo $des[3]; ?>"/></td>
      </tr>
      <tr>
        <td>Charisma</td>
        <td><input type="radio" name="d2" value="<?php echo $des[0]; ?>"/></td>
        <td><input type="radio" name="d2" value="<?php echo $des[1]; ?>"/></td>
        <td><input type="radio" name="d2" value="<?php echo $des[2]; ?>"/></td>
        <td><input type="radio" name="d2" value="<?php echo $des[3]; ?>"/></td>
      </tr>
      <tr>
        <td>Might</td>
        <td><input type="radio" name="d3" value="<?php echo $des[0]; ?>"/></td>
        <td><input type="radio" name="d3" value="<?php echo $des[1]; ?>"/></td>
        <td><input type="radio" name="d3" value="<?php echo $des[2]; ?>"/></td>
        <td><input type="radio" name="d3" value="<?php echo $des[3]; ?>"/></td>
      </tr>
      <tr>
        <td>Mind</td>
        <td><input type="radio" name="d4" value="<?php echo $des[0]; ?>"/></td>
        <td><input type="radio" name="d4" value="<?php echo $des[1]; ?>"/></td>
        <td><input type="radio" name="d4" value="<?php echo $des[2]; ?>"/></td>
        <td><input type="radio" name="d4" value="<?php echo $des[3]; ?>"/></td>
      </tr>
    </tbody>
  </table>
  <!-- fin l'idée-->
</fieldset>
<div class="form-control">
  <?php echo $this->Form->submit(__('Submit'), ['class' => 'btn btn-primary pull-right']); ?>
</div>