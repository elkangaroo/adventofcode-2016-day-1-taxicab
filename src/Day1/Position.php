<?php

namespace Advent\Day1;

class Position
{
    const DIRECTION_EAST = 'E';
    const DIRECTION_SOUTH = 'S';
    const DIRECTION_WEST = 'W';
    const DIRECTION_NORTH = 'N';

    private $x;
    private $y;
    private $direction;

    /**
     * @param int $x
     * @param int $y
     * @param string $direction
     */
    public function __construct($x = 0, $y = 0, $direction = self::DIRECTION_NORTH)
    {
        $this->x = $x;
        $this->y = $y;
        $this->direction = $direction;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    public function turnLeft()
    {
        switch ($this->direction) {
            case self::DIRECTION_EAST:
                $this->direction = self::DIRECTION_NORTH;
                break;
            case self::DIRECTION_SOUTH:
                $this->direction = self::DIRECTION_EAST;
                break;
            case self::DIRECTION_WEST:
                $this->direction = self::DIRECTION_SOUTH;
                break;
            case self::DIRECTION_NORTH:
                $this->direction = self::DIRECTION_WEST;
                break;
        }
    }

    public function turnRight()
    {
        switch ($this->direction) {
            case self::DIRECTION_EAST:
                $this->direction = self::DIRECTION_SOUTH;
                break;
            case self::DIRECTION_SOUTH:
                $this->direction = self::DIRECTION_WEST;
                break;
            case self::DIRECTION_WEST:
                $this->direction = self::DIRECTION_NORTH;
                break;
            case self::DIRECTION_NORTH:
                $this->direction = self::DIRECTION_EAST;
                break;
        }
    }

    /**
     * @param int $length
     */
    public function move($length)
    {
        switch ($this->direction) {
            case self::DIRECTION_EAST:
                $this->x += $length;
                break;
            case self::DIRECTION_SOUTH:
                $this->y -= $length;
                break;
            case self::DIRECTION_WEST:
                $this->x -= $length;
                break;
            case self::DIRECTION_NORTH:
                $this->y += $length;
                break;
        }
    }
}

