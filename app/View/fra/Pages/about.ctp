<div class="page-header">
  <h1><?php echo __('About'); ?></h1>
</div>
<h2>Atlante</h2>
<img src="/altergi/img/atlante.png" alt="Atlante" style="border:0">
<p>Le moteur de jeu Atlante est un moteur gratuit et libre permettant de lancer votre propre jeu de role PHP sur internet.</p>
<p>Vous pouvez le télécharger à l'adresse suivante :
  <?php echo $this->Html->link('https://github.com/agentcobra/atlante/'); ?>, ensuite, libre à vous de le modifier pour correspondre a vos goûts.</p>
<p>Ce programme a entierement été programmé par
  <?php echo $this->Html->link('agentcobra', 'mailto:agentcobra@users.noreply.github.com', null, 'merci de ne pas envoyer de spam') ?>
  en utilisant le framework <?php echo $this->Html->link('CakePHP', 'http://cakephp.org') ?> en réutilisant les idées de
  <?php echo $this->Html->link('Talesta4', 'http://www.talesta.free.fr/') ?> qui été programmé par
  <?php echo $this->Html->link('Leym', 'mailto:leym@abigate.com', null, 'merci de ne pas envoyer de spam') ?>.</p>
<p>Ce programme n'existerait pas sans l'aide de <?php echo $this->Html->link('A.B.Chatignon', 'mailto:?', null, 'merci de ne pas envoyer de spam') ?> en dirigeant l'équipe Atlante.</p>
<p>Les graphismes livrés avec le jeu sont tous l'oeuvre de
  <?php echo $this->Html->link('Kuro', 'mailto:kurotashi.mkproject@gmail.com', null, 'merci de ne pas envoyer de spam') ?>, les droits de ces images lui appartiennent evidemment et seul leur usage dans le cadre du fonctionnement d'un moteur de type Atlante est autorisé.
  Pour tout autre usage, merci de le contacter par mail.</p>
<p class="center">This work is licensed under <?php echo $this->Html->link('GPLv2', 'https://github.com/agentcobra/atlante/blob/master/LICENSE') ?>.</p>

<h2>L'équipe de développement</h2>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <?php echo $this->Html->image('http://cdn.libravatar.org/avatar/ffe0cd6e04563ae6f31327fe4b113055?s=300', ['alt' => 'Kuro', 'class' => 'img-thumbnail']) ?>
      <div class="caption">
        <h3>Kuro</h3>
        <p>...</p>
        <span class="badge">Le directeur de MK Project</span><span class="badge">Le Community Manager</span> <span class="badge">Le directeur artistique</span>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <?php echo $this->Html->image('http://cdn.libravatar.org/avatar/057962cd3ad905b3bfeff35df8e86c81?s=300', ['alt' => 'Agentcobra', 'class' => 'img-thumbnail']) ?>
      <div class="caption">
        <h3>Agentcobra</h3>
        <p>...</p>
        <span class="badge">Le codeur</span>
      </div>
    </div>
  </div>
</div>