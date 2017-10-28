<?php

namespace Game\Models;

use Game\PlayerInterface;

/**
 * Class Player
 * @package Game\Model
 */
class Player implements PlayerInterface
{
    /** @var  string name */
    protected $name;
    
    /** @var  integer score */
    protected $score;
    
     /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param integer $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getPlayerName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getPlayerScore()
    {
        return $this->score;
    }
}