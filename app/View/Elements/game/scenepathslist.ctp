<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<?php foreach ($this->requestAction('/paths/scenepathslist') as $path): ?>
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="scene<?php echo $path['destination']['id']; ?>">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $path['destination']['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $path['destination']['id']; ?>">
					<h4 class="panel-title">
					<?php echo $path['destination']['name']; ?>
					</h4>
				</a>
			</div>
			<div id="collapse<?php echo $path['destination']['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $path['destination']['id']; ?>">
				<div class="panel-body">
					<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
						<?php echo $this->Html->link('Se deplacer <span class="badge-pa pull-right">1 PA</span>', ['controller' => 'players', 'action' => 'move', $path['Path']['destination']],['class'=>'btn btn-primary-move','escape'=>false]); ?>
						<?php echo $this->Html->link('Se deplacer <span class="badge-pa pull-right">10 PA</span>', ['controller' => 'players', 'action' => 'move', $path['Path']['destination']],['class'=>'btn btn-primary-move','escape'=>false]); ?>
						<?php echo $this->Html->link('Se deplacer <span class="badge-pa pull-right">200 PA</span>', ['controller' => 'players', 'action' => 'move', $path['Path']['destination']],['class'=>'btn btn-primary-move','escape'=>false]); ?>
						<?php echo $this->Html->link('Se deplacer <span class="badge-pa pull-right">404 PA</span>', ['controller' => 'players', 'action' => 'move', $path['Path']['destination']],['class'=>'btn btn-primary-move','escape'=>false]); ?>
					</div>
					<?php
						if (file_exists(WWW_ROOT.'files'.DS.'scenes/'.$path['destination']['id'].'.png')){
							echo $this->html->image($this->html->url('/files'.DS.'scenes/'.$path['destination']['id'].'.png',true),['alt' => $scene['name'], 'class' => 'scene-picture-move center-block img-responsive']);
						}else{
							echo $this->html->image($this->html->url('/files'.DS.'scenes/0.png',true),['alt' => $scene['name'], 'class' => 'scene-picture-move center-block img-responsive']);
						}
					?>
					<p><?php echo $path['destination']['description']; ?></p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>