<div class="page-header">
  <h1>Le tchat IRC <small>sur freenode</small></h1>
</div>
<?php
if (is_null(AuthComponent::user('username'))) {
  echo '<iframe src="https://kiwiirc.com/client/irc.freenode.net/?nick=atl|?#atlante" style="border:0; width:100%; height:450px;"></iframe>';
} else {
  echo '<iframe src="https://kiwiirc.com/client/irc.freenode.net/?nick=' . AuthComponent::user('username') . '&theme=basic#atlante" style="border:0; width:100%; height:450px;"></iframe>';
}
?>
