<?php

use Advent\Taxicab;

class TaxicabTest extends PHPUnit_Framework_TestCase
{
    private $taxicab;

    protected function setUp()
    {
        $this->taxicab = new Taxicab();
    }

    public function testCalculateShortestPath_Example1()
    {
        $this->assertEquals(5, $this->taxicab->calculateShortestPath('R2, L3'));
    }

    public function testCalculateShortestPath_Example2()
    {
        $this->assertEquals(2, $this->taxicab->calculateShortestPath('R2, R2, R2'));
    }

    public function testCalculateShortestPath_Example3()
    {
        $this->assertEquals(12, $this->taxicab->calculateShortestPath('R5, L5, R5, R3'));
    }

    public function testCalculateShortestPath_Puzzle()
    {
        $this->assertEquals(250, $this->taxicab->calculateShortestPath('R4, R5, L5, L5, L3, R2, R1, R1, L5, R5, R2, L1, L3, L4, R3, L1, L1, R2, R3, R3, R1, L3, L5, R3, R1, L1, R1, R2, L1, L4, L5, R4, R2, L192, R5, L2, R53, R1, L5, R73, R5, L5, R186, L3, L2, R1, R3, L3, L3, R1, L4, L2, R3, L5, R4, R3, R1, L1, R5, R2, R1, R1, R1, R3, R2, L1, R5, R1, L5, R2, L2, L4, R3, L1, R4, L5, R4, R3, L5, L3, R4, R2, L5, L5, R2, R3, R5, R4, R2, R1, L1, L5, L2, L3, L4, L5, L4, L5, L1, R3, R4, R5, R3, L5, L4, L3, L1, L4, R2, R5, R5, R4, L2, L4, R3, R1, L2, R5, L5, R1, R1, L1, L5, L5, L2, L1, R5, R2, L4, L1, R4, R3, L3, R1, R5, L1, L4, R2, L3, R5, R3, R1, L3'));
    }
}

