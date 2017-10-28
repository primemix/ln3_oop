<?php

namespace Game;

/**
 * Interface BoardInterface
 * @package Game
 */
interface BoardInterface
{
    /**
     * @return integer size board
     */
    public function getAreaSize();

    /**
     * @return array board area
     */
    public function getStartPosition();
    
    /**
     * @return array board area
     */
    public function getBoard();
}