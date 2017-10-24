<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Game\Models\Game;

$board = new \Game\Models\Board();
$player = new \Game\Models\Player();

$startGame = new Game($board, $player);

$game = $startGame->initGame();
$startGame->runGame($game);