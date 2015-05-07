<?php

App::uses('AppController', 'Controller');

class TestsController extends AppController {

  public $uses = array();

  public function game_kuro() {
    $this->layout = 'game';
    $this->set('player', $this->Session->read('Player.name'));
  }

}
