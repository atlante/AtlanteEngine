<?php
//Privé
if ($private):
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="panel panel-default" >
                    <div class="panel-heading"><?php echo $player['Player']['name']; ?></div>
                    <?php echo $this->Html->image('PNJ/Kasumi-card.png', ['class' => 'avatar-player']); ?>
                    <p>PV</p>
                    <p>PA</p>
                    <p>Gold</p>
                    <?php
                    $this->Html->image('spriteset-altergi.png', [
                        'class' => 'center-block',
                        'style' => $this->Html->style([
                        ])
                    ]);
                    ?>
                    <a href="#">Lien description</a>
                    <?php echo $this->Html->link(_('Report'), ['action' => 'report'], ['class' => 'btn btn-danger']); ?>
                </div>
            </div>
            <div class="col-lg-10">
                <small class="pull-right">(Private)</small>
                <div class="clearfix"></div>
                <div class="page-header">
                    <h1>Feuille de Personnage</h1>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Compétences</div>
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href="#stats" role="tab" data-toggle="tab">Statistiques</a></li>
                            <li><a href="#profile" role="tab" data-toggle="tab">Maitrises</a></li>
                            <li><a href="#messages" role="tab" data-toggle="tab">Habilités / Métier</a></li>
                            <li><a href="#inventory" role="tab" data-toggle="tab">Inventaire</a></li>
                        </ul>



                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="stats"> <strong>Cobra</strong>...</div>
                            <div class="tab-pane fade" id="profile">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                    <img class="media-object" src="http://placehold.it/64/00ff00" alt="Pomme de terre" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><span class="badge">Niv.12</span> Maîtrise Hâche</h4>
                                                    Maîtrise de la Hâche.
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <!--?php echo $this->Html->image('http://placehold.it/64/red', ['class' => 'media-object']); ?-->
                                                    <img class="media-object" src="http://placehold.it/64/red" alt="Pomme de terre" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><span class="badge">Niv.99</span> Maîtrise Confiture de Fraise</h4>
                                                    Maîtrise de la Confiture de Fraise.
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                    <img class="media-object" src="http://placehold.it/64/00ff00" alt="Pomme de terre" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><span class="badge">Niv.54</span> Maîtrise Fouet</h4>
                                                    Maîtrise du Fouet pour les gens qui aiment le SM comme A.B. Chatignon.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                    <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><span class="badge">Niv.02</span> Maîtrise Dague</h4>
                                                    Maîtrise de la Dague.
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                    <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><span class="badge">Niv.MAX</span> Maîtrise Drague</h4>
                                                    Maîtrise de la Drague.
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                    <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><span class="badge">Niv.00</span> Maîtrise Connerie</h4>
                                                    Maîtrise de la Connerie.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /#profil -->
                            <div class="tab-pane fade" id="messages">
                                <div class="col-md-6">
                                    <ul class="media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><span class="badge">Niv.09</span> Boulanger</h4>
                                                Vos bons pains épatent la galerie!
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><span class="badge">Niv.05</span> Cuisinier</h4>
                                                Vous cuisinez comme un chef!
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <!--?php echo $this->Html->image('http://placehold.it/64/green', ['class' => 'media-object']); ?-->
                                                <img class="media-object" src="http://placehold.it/64/gree," alt="Pomme de terre" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><span class="badge">Niv.20</span> Brasseur</h4>
                                                Vooous srvez plut tot biienn...?! enfin... vive les ... poneys... Licornes?
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><span class="badge">Niv.01</span> Mineur</h4>
                                                Et hop; trois diam's; avec ça et un peu de bois, on va se faire une pioche en diamant !
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><span class="badge">Niv.03</span> Bûcheron</h4>
                                                Couper du bois; c'est nul. Couper du bois virtuellement, c'est cool !
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <!--?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?-->
                                                <img class="media-object" src="http://placehold.it/64/0000ff" alt="Pomme de terre" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><span class="badge">Niv.12</span> Herboriste</h4>
                                                Attention, cela ne veut pas dire que je vends de la drogue !
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="inventory">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <?php echo $this->Html->image('http://placehold.it/64/ff0000', ['class' => 'media-object']); ?>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Objet inconnu</h4>
                                        L'objet est rouge.
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <?php echo $this->Html->image('http://placehold.it/64/00ff00', ['class' => 'media-object']); ?>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Objet inconnu</h4>
                                        L'objet est vert.
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <?php echo $this->Html->image('http://placehold.it/64/0000ff', ['class' => 'media-object']); ?>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Objet inconnu <span class="badge">équipé</span></h4>
                                        L'objet est bleu.
                                    </div><!-- /.media-body -->
                                </div><!-- /.media -->
                            </div><!-- /#inventory -->
                        </div><!-- /.tabcontent -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <?php
else:
    //Public
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <small class="pull-right">(Public)</small>
                <div class="clearfix"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Description</h3>
                    </div>
                    <div class="panel-body">
                        <p><?php echo $this->Markdown->md($player['Player']['story']); ?></p>
                        <?php debug($player['Player']); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?php echo $player['Player']['name']; ?>
                            <small><?php echo $player['Player']['title']; ?></small>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="avatar-player">
                            <?php
                            echo $this->Html->image($player['Player']['picture'], [
                                'alt' => $player['Player']['name'],
                                'class' => 'img-rounded img-responsive center-block',
                                'title' => $player['Player']['name']
                            ]);
                            ?>
                            <div class="rankF"></div>
                        </div><br>
                        <?php echo ('<br>' . $age . ''); ?>
                    </div>
                </div>
                <?php $this->Html->link('<i class="fa fa-exclamation-triangle"></i>', ['action' => 'report'], ['class' => 'btn btn-danger btn-lg', 'escape' => false]); ?>
                <?php $this->Html->link('<i class="fa fa-exclamation-triangle"></i>', ['action' => 'report'], ['class' => 'btn btn-danger', 'escape' => false]); ?>
                <?php $this->Html->link('<i class="fa fa-exclamation-triangle"></i>', ['action' => 'report'], ['class' => 'btn btn-danger btn-sm', 'escape' => false]); ?>
                <?php echo $this->Html->link('<i class="fa fa-exclamation-triangle"></i>', ['action' => 'report'], ['class' => 'btn btn-danger btn-xs', 'escape' => false]); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<hr>
<?php
//echo $this->Html->image('http://i.imgur.com/E4NBs5y.png', ['class' => 'img-responsive center-block']); ?>