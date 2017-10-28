<?php

namespace Game;

/**
 * Interface PlayerInterface
 * @package Game
 */
interface PlayerInterface
{
    /**
     * @return string Player name
     */
    public function getPlayerName();

    /**
     * @return integer Player score
     */
    public function getPlayerScore();
}