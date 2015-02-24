<div class="page-header">
  <h1><?php echo __('News from ') . Configure::read('Game.name'); ?></h1>
</div>
<?php foreach ($news as $new): $new = current($new); ?>
  <div class="panel <?php echo "panel-" . $new['type']; ?>" id="<?php echo $new['slug']; ?>">
    <div class="panel-heading">
      <h3 class="panel-title"><?php echo $new['name']; ?></h3>
    </div>
    <div class="panel-body"><?php echo $new['content']; ?></div>
    <div class="panel-footer"><?php echo $new['created']; ?></div>
  </div>
<?php endforeach; ?>
<?php echo $this->Paginator->numbers(); ?>
<?php unset($news); ?>
