<?php
echo $this->Html->css('bespoke', ['inline' => false]);
echo $this->Html->script('bespoke.min', ['inline' => false]);
echo $this->Html->script('bespoke-keys.min', ['inline' => false]);
?>
<div class="page-header"><h1>Aide à l'interface</h1></div>

<article id="presentation">
  <section>
    <h2>Voici les differentes actions possibles dans le jeu</h2>
  </section>
  <section>Slide 2</section>
  <section>Slide 3</section>
</article>
<p class="alert alert-info">Les touches fléchés du clavier (gauche et droite) permettent le défilement de l'aide</p>
<?php echo $this->Html->scriptStart(['inline' => false]); ?>
var deck = bespoke.from('#presentation', {
// Plugins:
keys: true
});
<?php echo $this->Html->scriptEnd(); ?>