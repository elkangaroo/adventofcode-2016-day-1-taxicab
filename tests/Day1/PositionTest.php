<?php

use Advent\Day1\Position;

class PositionTest extends PHPUnit_Framework_TestCase
{
    public function testPosition_Defaults()
    {
        $position = new Position();
        $this->assertEquals(0, $position->getX());
        $this->assertEquals(0, $position->getY());
        $this->assertEquals(Position::DIRECTION_NORTH, $position->getDirection());
    }

    public function testTurnLeft()
    {
        $position = new Position();
        $position->turnLeft();
        $this->assertEquals(Position::DIRECTION_WEST, $position->getDirection());
        $position->turnLeft();
        $this->assertEquals(Position::DIRECTION_SOUTH, $position->getDirection());
        $position->turnLeft();
        $this->assertEquals(Position::DIRECTION_EAST, $position->getDirection());
        $position->turnLeft();
        $this->assertEquals(Position::DIRECTION_NORTH, $position->getDirection());
    }

    public function testTurnRight()
    {
        $position = new Position();
        $position->turnRight();
        $this->assertEquals(Position::DIRECTION_EAST, $position->getDirection());
        $position->turnRight();
        $this->assertEquals(Position::DIRECTION_SOUTH, $position->getDirection());
        $position->turnRight();
        $this->assertEquals(Position::DIRECTION_WEST, $position->getDirection());
        $position->turnRight();
        $this->assertEquals(Position::DIRECTION_NORTH, $position->getDirection());
    }

    public function provideMoveData()
    {
        return [
            [Position::DIRECTION_EAST, 1, 1, 0],
            [Position::DIRECTION_EAST, 2, 2, 0],
            [Position::DIRECTION_SOUTH, 1, 0, -1],
            [Position::DIRECTION_SOUTH, 2, 0, -2],
            [Position::DIRECTION_WEST, 1, -1, 0],
            [Position::DIRECTION_WEST, 2, -2, 0],
            [Position::DIRECTION_NORTH, 1, 0, 1],
            [Position::DIRECTION_NORTH, 2, 0, 2],
        ];
    }

    /**
     * @dataProvider provideMoveData
     */
    public function testMove($direction, $length, $expX, $expY)
    {
        $position = new Position(0, 0, $direction);
        $position->move($length);
        $this->assertEquals($expX, $position->getX());
        $this->assertEquals($expY, $position->getY());
        $this->assertEquals($direction, $position->getDirection());
    }
}

