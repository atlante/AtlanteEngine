<div class="page-header">
  <h1><?php echo __('Users list') ?></h1>
</div>
<ul>
  <?php
  foreach ($users as $user) {
    echo '<li>' . $user . '</li>';
  }
  ?>
</ul>