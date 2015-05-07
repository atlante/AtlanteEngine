<div class="row">
  <div class="col-md-9">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
      <li class="active">
        <a href="#scene" data-toggle="tab">
          <?php echo $scene['name']; ?>
        </a>
      </li>
      <li>
        <a href="#move" data-toggle="tab">
          <span class="fa fa-compass fa-2x"></span> Déplacements
        </a>
      </li>
      <!--li><a href="#media" data-toggle="tab">Secret</a></li-->
      <li>
        <a href="#actions" data-toggle="tab">
          <span class="fa fa-book fa-2x"></span> Fichier d'Action 
        </a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade in active" id="scene">
		<h1 class="text-center"><?php echo $scene['name']; ?></h1>
        <?php
			if (file_exists(WWW_ROOT.'files'.DS.'scenes/'.$scene['id'].'.png')){
				echo $this->html->image($this->html->url('/files'.DS.'scenes/'.$scene['id'].'.png',true),['alt' => $scene['name'], 'class' => 'scene-picture center-block img-responsive']);
			}else{
				echo $this->html->image($this->html->url('/files'.DS.'scenes/0.png',true),['alt' => $scene['name'], 'class' => 'scene-picture center-block img-responsive']);
			}
        ?>
        <div class="scene-description"><?php echo $scene['description']; ?></div>

      </div>
      <div class="tab-pane tab-pane fade" id="move">
        <?php echo $this->element('game/scenepathslist'); ?>
      </div>
      <div class="tab-pane tab-pane fade" id="media">
      </div>
      <div class="tab-pane fade" id="actions">
        <div class='row'>
          <div class="col-md-3">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Actions
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                      <li>
                        <?php
                        echo $this->Html->link('' . __('Speak'), ['controller' => 'players', 'action' => 'speak'], ['escape' => false]);
                        ?>
                      </li>
                      <!--<li>
                        <?php
                        //echo $this->Html->link('<span class="badge pull-right">2</span>' . __('Shout'), '/game', ['escape' => false], 'soon');
                        ?>
                      </li> -->
                      <li>
                        <?php
                        echo $this->Html->link('<span class="badge-pa pull-right">3</span>' . __('Attack'), '/game', ['escape' => false], 'soon');
                        ?>
                      </li>
                      <!--li><a href="#"><span class="badge pull-right">1</span>Fouiller Cadavre</a></li-->
                      <li>		
                        <?php
                        echo $this->Html->link('<span class="badge-pa pull-right">5</span><span class="badge pull-right new-label">new</span>' . __('Give'), ['controller' => 'players', 'action' => 'give'], ['escape' => false], 'En développement, attention de ne pas faire n\'importe quoi ! ');
                        ?>
                      </li>
                      <li>
                        <?php
                        echo $this->Html->link('<span class="badge-pa pull-right">10</span>' . __('Steal'), '/game', ['escape' => false], 'soon');
                        ?>
                      </li>
                      <li>
                        <?php
                        echo $this->Html->link('<span class="badge-pa pull-right">1</span>' . __('Use'), '/game', ['escape' => false], 'soon');
                        ?>
                      </li>
                      <li class="nav-divider"></li>
                      <!--li><a href="#">Se déplacer</a></li-->
                      <!--li><a href="#"><span class="badge pull-right">1</span>Se nourrir</a></li-->
                      <!--li><a href="#"><span class="badge pull-right">0</span>Lire un livre</a></li-->
                      <li><a href="#">Consulter MJ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--<div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Actions du lieu
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#"><span class="badge pull-right">2</span>Fouiller</a></li>
                     <!-- <li><a href="#">action2</a></li>
                      <li><a href="#">action3</a></li> 
                    </ul>
                  </div>
                </div>
              </div>
              <!--div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Gestion de l'inventaire et du grimoire
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#">Oublier Sort</a></li>
                      <li><a href="#">Laisser Objet</a></li>
                      <li><a href="#">Ramasser Objet</a></li>
                    </ul>
                  </div>
                </div>
              </div-->
              <!--div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Gestion des quêtes
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#"><span class="badge pull-right">0</span>Répondre à une quête</a></li>
                      <li><a href="#"><span class="badge pull-right">0</span>Terminer une quête</a></li>
                    </ul>
                  </div>
                </div>
              </div-->
            </div>
          </div>
          <div class="col-md-9">
            <div class="page-header">
              <h1>Fichier d'Action</h1>
			 <a  onclick="document.location.reload(false)"> <i class="fa fa-refresh"></i></a>
            </div>
            <ul class="list-group">
              <?php foreach ($this->requestAction('/fas/show') as $fa) : $fa = current($fa); ?>
                <li class="list-group-item">
                  <?php echo '<span class="fa-date">' . $fa['created'] . '</span> | <span class="fa-content">' . $fa['content'] . '</span>'; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <?php echo $this->element('game/scenesound'); ?>
    <?php echo $this->element('game/sceneplayerslist'); ?>
  </div>
</div>
