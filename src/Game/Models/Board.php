<?php

namespace Game\Models;
use Game\BoardInterface;
/**
 * Class Board
 * @package Game\Models
 */
class Board implements BoardInterface
{
    const ZERO_CONST = 0;

    /** @var  integer $size */
    protected $size;

    /** @var array $area */
    protected $area = array();
    
    /**
     * @param integer $size
     */
    public function setAreaSize($size)
    {
        $this->size = $size;
    }
    
    /**
     * @return integer
     */
    public function getAreaSize()
    {
        return $this->size;
    }
    
    /**
     * @return array $this->area
     */
    public function setBoard()
    {
        for ($x = 1; $x <= $this->getAreaSize(); $x++) {
            for ($y = 1; $y <= $this->getAreaSize(); $y++) {
                $this->area[$x][$y] = self::ZERO_CONST;
            }
        }
        return $this->area;
    }

    public function setStartPosition($firstPlayer, $secondPlayer)
    {
        // TODO: Implement setStartPosition() method.
    }

    public function getStartPosition()
    {
        // TODO: Implement getStartPosition() method.
    }
    public function getBoard()
    {
        // TODO: Implement getBoard() method.
    }
}
