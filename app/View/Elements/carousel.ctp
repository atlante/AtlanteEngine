<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
  </ol-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <?php echo $this->Html->image('carousel/mkonline-1.jpg', ['class' => 'center-block', 'style' => 'max-height:301px;width:auto;']); ?>
    </div>
    <div class="item">
      <?php echo $this->Html->image('carousel/atlante.jpg', ['class' => 'center-block']); ?>
      <div class="carousel-caption">
        <p>
          Ce site utilise <strong> Atlante Engine</strong> qui est actuellement en cours de développement.
          Plus d'informations sur <?php echo $this->Html->link('Github', 'https://github.com/agentcobra/atlante/'); ?>
        </p>
      </div>
    </div>
    <div class="item">
      <?php echo $this->Html->image('carousel/themes.jpg', ['class' => 'center-block', 'style' => 'max-height:301px;width:auto;']); ?>
      <div class="carousel-caption">
        <p>N'oubliez pas de choisir votre <strong>Thème</strong> ! </p>
      </div>
    </div>
    <div class="item">
      <?php echo $this->Html->image('carousel/music.png', ['class' => 'center-block', 'style' => 'max-height:301px;width:auto;']); ?>
      <div class="carousel-caption">
        <p>Avec ou sans les <strong>musiques</strong>, c'est vous qui choisissez ! </p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /#carousel -->