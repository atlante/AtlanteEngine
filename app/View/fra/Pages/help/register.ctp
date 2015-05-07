<?php
echo $this->Html->css('bespoke');
echo $this->Html->script('bespoke.min', ['inline' => false]);
echo $this->Html->script('bespoke-keys.min', ['inline' => false]);
?>
<div class="page-header"><h1>Aide à la création de Personnage</h1></div>

<article id="presentation" class="cube">
  <section>
	 <div class="slide-help">
		<h2> Introduction à la création de votre Personnage</h2>
		<p>
		Dans MKOnline, vous pouvez créer le personnage que vous souhaitez. Que ce soit un jeune homme de 15 ans ou bien une vieille femme de 84 ans. Lors de votre inscription, vous devrez nous donner le plus de détails possibles concernant son histoire et son apparence physique.
		</p>
		
		<h2> Votre description </h1>
		<p>
		
		Comme je l'ai dit dans l'introduction, vous devrez créer une description du personnage ; Vous pourrez ici indiquer la profession de celui-ci. Exemple: Ouvrier, Etudiant, Chercheur ... Essayez d'être le plus précis possible, on veut en savoir le plus possible sur votre personnage. Ainsi, tout le monde pourra comprendre qui vous êtes. C'est très important !</p>
	
		<div class="alert alert-help-users" role="alert">
			<p> ATTENTION: Ne divulguez aucune information concernant votre vie privée. Les descriptions seront controlées pour éviter les abus. Si votre description est trop petite, votre compte ne sera pas activé, on ne veut pas un roman, mais faites un effort ! </p>
		</div>
		
		<h2>Le nom de votre personnage</h2>
		<p>
		Bien entendu, votre personnage devra avoir un nom. Il est formellement interdit d'utiliser un Pseudonyme du genre Kevindu54. On veut un <strong>prénom</strong> et si possible un <strong>nom</strong>.
		</p>
	</div>
  </section>
  
  <section>
  
	  <div class="slide-help">
		<h2> Le Background</h2>
		<p>
		Le Background permet de donner des informations supplémentaires sur votre personnage, cette description ne pourra être lue que par les Maîtres du Jeu. Dans cette catégorie, vous écrirez le but de votre personnage, ces affinités et les éventuelles compétences qu'il possède par rapport aux autres.
		</p>
		
		<h2> L'Avatar </h2>
		<p> Quand votre compte sera activé, vous pourrez choisir une image illustrant votre personnage parmi vos fichiers personnels. Cela permettra aux autres joueurs de visualier votre personnage. Bien sûr, c'est facultatif.
		<div class="alert alert-help-users" role="alert">
			ATTENTION: Tous les joueurs ayant une image contenant des contenus pornographiques, violents ou religieux seront temporairement bannis.
		</div>
		
		<h2> La couleur de votre Nom </h2>
		<p> Vous aurez la possibilité de choisir une couleur pour votre nom de personnage. Choisissez la couleur qui vous va le plus ! Cependant, évitez les couleurs trop sombres, qui pourraient nuire à la visibilité de votre nom.
		
	  </div>
	  
	  <p> D'autres informations à venir ... </p>
  </section>
  
</article>
<br>
<br>
  <div class="alert alert-help-users" role="alert">
	Utilisez les flèches du clavier pour passer à la page suivante.
  </div>
<?php echo $this->Html->scriptStart(['inline' => false]); ?>
var deck = bespoke.from('#presentation', {
// Plugins:
keys: true
});
<?php echo $this->Html->scriptEnd(); ?>