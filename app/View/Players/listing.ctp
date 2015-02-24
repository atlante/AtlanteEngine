<div class="page-header">
  <h1><?php echo __('Players list') ?></h1>
</div>
<ul>
  <?php
  foreach ($players as $player) {
    echo '<li>' . $player . '</li>';
  }
  ?>
</ul>