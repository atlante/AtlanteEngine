<?php
if (is_null($this->Session->read('Auth.User.music'))) :
  ?>
  <div id="music" class="alert alert-info">
    <span class="glyphicon glyphicon-music"></span>
    <span class="glyphicon glyphicon-music"></span>
    <p>
      Vous pouvez activer la musique dans votre profil.
      Si vous souhaitez jouer sans musique, merci de valider les options en laissant la case musique décoché.
    </p>
    <span class="glyphicon glyphicon-music"></span>
    <span class="glyphicon glyphicon-music"></span>
  </div>
  <?php
else :
  if ($this->Session->read('Auth.User.music')) :
    ?>
    <div id="music">
      <?php
			if (file_exists(WWW_ROOT.'files'.DS.'music'.DS.$scene['id'].'.mp3')){
				$musicTitle='?';
				$musicUrl=$this->Html->url(DS.'files'.DS.'music'.DS.$scene['id'].'.mp3',true);
				//$music=$this->Html->media($musicUrl,['class'=>'center-block','text'=>'Your browser does not support the audio element.','autoplay','controls','loop']);
			}else{
				$musicTitle='Synopslive';
				$musicUrl='http://synopslive.net:8000/synopslive-permanent.mp3';
				//$music=$this->Html->media("http://synopslive.net:8000/synopslive-permanent.mp3",['class'=>'center-block','text'=>'Your browser does not support the audio element.','autoplay','controls']);
			}
	  
      switch ($scene['id']) {
        case 1:
			$musicTitle='In My Dreams - Intoxicated Piano';
			//echo $music;
			echo '<br><span class="text-muted"><span class="song-author">Intoxicated Piano</span> - <span class="song-title">In My Dreams</span></span><br>';
			echo $this->Html->link($this->Html->image('http://img.auboutdufil.com/cc_by-nc.png'),'http://creativecommons.org/licenses/by-nc/3.0/deed.fr',['target'=>'_blank','escape'=>false]);
        break;
        default:
				//echo $music;
        break;
      }
	  $this->Html->css('audioplayer',['inline'=>false]);
	  $this->Html->script('audioplayer',['inline'=>false]);
	  ?>
<?php echo $this->Html->media($musicUrl,['id'=>'music','preload'=>'auto','autoplay'=>false,'controls'=>true,'loop'=>true]); ?>
<?php
	$media=$this->Html->url(DS.'files'.DS.'Book2.ogg',true);
//	$media="";
	echo $this->Html->media($media,['id'=>'fx','preload'=>'auto']);
?>
    </div>
    <hr>
<?php $this->Html->scriptStart(array('inline' => false)); ?>
// Audio Music
$( function(){
	var audio = $('audio#music').audioPlayer();
	var audioElm = $('audio').get(0);
	audioElm.volume = 0.25; // Audio Music Volume
        audioElm.play();
});
// Audio Effect
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	var audioElm = $('audio#fx').get(0);
	audioElm.volume = 0.10; // Audio Effect Volume
	audioElm.play();
});
<?php $this->Html->scriptEnd(); ?>
    <?php
  endif;
endif;
?>
