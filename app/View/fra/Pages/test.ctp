<?php
$this->layout = 'default';
echo $this->Html->css('atlante-font', ['inline' => false]);
?>
<div class="page-header">
  <h1>Page pour les test</h1>
</div>
<ul style="font-size: 4em">
  <li><span class="atlante atlante-sword"></span></li>
  <li><span class="atlante atlante-swords"></span></li>
  <li><span class="atlante atlante-sword-black"></span></li>
  <li><span class="atlante atlante-kuro"></span></li>
  <li><span class="atlante atlante-agentcobra"></span></li>
</ul>
<hr><p class="atlante text">abcdefghijklmnopqrstuvwxyz</p>
<hr><p class="atlante text">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
<?php
//setlocale(LC_TIME, "C");
//echo strftime("%A");
//setlocale(LC_TIME, "fi_FI");
//echo strftime(" in Finnish is %A,");
//setlocale(LC_TIME, "fr_FR");
//echo strftime(" in French %A and");
//setlocale(LC_TIME, "de_DE");
//echo strftime(" in German %A.\n");
//echo '<img src="" alt="Logo PHP !" />';
//phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
?>
<?php
// Question-1-2 //
print('<br><br>Exo-1-2<hr>');

/**
 * permet d'afficher les variables a et b permutées
 * @param int $a
 * @param int $b
 * @return void
 */
function permutation($a, $b) {
  echo("<u>Les iterations:</u><br>");
  $temp = $a;
  $a = $b;
  $b = $temp;
  echo("  Le premier est " . $a . " le deuxieme est " . $b . ".");
}

permutation(1, 0);
?>
<?php
// Question-1-3 //
print('<br><br>Exo-1-3<hr>');

/**
 * affiche le plus grand en premier
 * @param int $a
 * @param int $b
 */
function maximum($a, $b) {
  if ($a > $b) {
    echo (' Le plus grand est ' . $a . ' suivit par ' . $b . "." );
  } else {
    echo ('Le plus grand est ' . $b . ' suivit par ' . $a . "." );
  }
}

maximum(42, 1337);
echo '<br>';
maximum("aaaa", "agentcobra");
echo '<br>';
maximum("agentcobra", "kuro");
echo '<br>';
maximum("agentcobra", "kuro", "stiwel");
?>