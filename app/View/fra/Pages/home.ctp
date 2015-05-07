<div class="page-header">
  <h1>Bienvenue sur Mitsu Kuragari Online</h1>
</div>
<h2>Le Monde de <?php echo Configure::read('Game.name'); ?></h2>
<p>
  Si vous n'avez jamais joué à un <abbr title="Jeu De Role">jdr</abbr> ou à un <abbr title="Play-by-email">pbem</abbr>, ce n'est pas grave! 
  <br>
  En effet, MKOnline a pour vocation d'être le seul et l'unique Jeu de rôle Next-Gen par navigateur ! 
  
</p>
<p>
  <?php echo Configure::read('Game.name'); ?> est le nom de ce JDR; Il est dérivé de MK ( Mitsu Kuragari ), un univers crée par Bryan PETIT.
  <!--Un monde où se côtoie des humains et des êtres sortis de nos légendes.
  Dans ce monde aux vastes étendus, l’action se concentre dans une grande vallée boisée qu’un groupe d’humain tente de coloniser, Valsombre.
  Que ce soit par goût de l’aventure ou pour prendre un nouveau départ, nombreux sont ceux qui ont répondu à l’appel.-->
</p>
<p>
  À vous de rejoindre le mouvement, en créant un personnage avec sa propre histoire et ses propres motivations, mais avant cela vous pouvez avoir envie d’en savoir plus :
  <?php echo $this->Html->link("Quel type de personnage puis-je créer ?", ['controller' => 'pages', 'action' => 'display', 'help', 'register']); ?>
</p>
<p>
  Vous êtes fin prêts. Vous pouvez aller dans la section <?php echo $this->Html->link("Inscription", ['controller' => 'users', 'action' => 'add']); ?>.
</p>
<p>
  En attendant que votre inscription soit prise en compte, nous pouvons regarder ensemble l'interface afin de mieux comprendre son fonctionnement.
</p>