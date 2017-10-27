<?php

namespace Game\Models;

use Game\AbstractGameClass;
use Game\BoardInterface;
use Game\PlayerInterface;

/**
 * Class Game
 * @package Game\Model
 */
class Game extends AbstractGame
{
    /** @var BoardInterface  */
    protected $boardProvider;
    
    /** @var PlayerInterface  */
    protected $playerProvider;

    /**
     * Game constructor.
     * @param BoardInterface $board
     * @param PlayerInterface $player
     */
    public function __construct(BoardInterface $board, PlayerInterface $player)
    {
        $this->boardProvider = $board;
        $this->playerProvider = $player;
    }

    public function initGame()
    {
        //TODO: init game method.
    }
    
    public function runGame($initGame)
    {
        //TODO: run game method.
    }
}
