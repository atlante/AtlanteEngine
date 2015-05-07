<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Tableau de bord <small>Statistiques</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active">
        <i class="fa fa-dashboard"></i> Tableau de bord
      </li>
    </ol>
  </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-12">
    <div class="alert alert-info alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <i class="fa fa-info-circle"></i> Vous êtes sur <strong>l'interface d'Administration</strong> de <strong><?php echo Configure::read('Game.name'); ?> </strong>
    </div>
  </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="glyphicon glyphicon-user fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">26</div>
            <div>Utilisateurs</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">Voir la liste</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-group fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">12</div>
            <div>Personnages</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">Voir la liste</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-fw fa-book fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">124</div>
            <div> Actions Proposées </div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">En savoir plus</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="glyphicon glyphicon-plus fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">13</div>
            <div>Nouveaux Utilisateurs</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">Voir la liste</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Statistiques des visites</h3>
      </div>
      <div class="panel-body">
        <div id="morris-area-chart"></div>
      </div>
    </div>
  </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="glyphicon glyphicon-edit fa-fw"></i> Mémos des Admins</h3>
      </div>
      <div class="panel-body">
        <div class="list-group">
			<label>Ajouter une tâche ...</label>
			<input name="Exemple" class="form-control" id="1" empty=" Ecrire pour ajouter" maxlength="255" type="text">
			<br>
          <a href="#" class="list-group-item">
            <span class="badge">Il y a deux heures</span>
            <i class="fa fa-fw fa-check"></i> Dormir
          </a>
          <a href="#" class="list-group-item">
            <span class="badge">Hier</span>
            <i class="fa fa-fw fa-globe"></i> Ne pas oublier de bannir tout le monde
          </a>
          <a href="#" class="list-group-item">
            <span class="badge">Il y a une semaine</span>
            <i class="fa fa-fw fa-check"></i> Faire la Maj du PSS. ( ça existe pas )
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="glyphicon glyphicon-ban-circle fa-fw"></i> Utilisateurs signalés</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Utilisateurs</th>
                <th>Personnage</th>
                <th>Report</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>3</td>
                <td>MacGyver</td>
                <td>AgentVipère</td>
                <td>5</td>
              </tr>
              <tr>
                 <td>6</td>
                <td>MartyMcFly</td>
                <td>Kuro-Tas-de-Sushi</td>
                <td>0</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Stiwel</td>
                <td>Jean-bon</td>
                <td>1</td>
              </tr>
              <tr>
                <td>6</td>
                <td>H-Teumleuh</td>
                <td>CSS-senpai</td>
                <td>1</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-right">
          <a href="#">Voir la liste<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.row -->
<?php
//echo '<span style="font-size: 7em;">&Ll;<br>&Ll;<br>&Ll;</span>';
//$filename = $this->Html->url('/app/tmp/logs/activity.log');
//echo file_get_contents($filename);
?>