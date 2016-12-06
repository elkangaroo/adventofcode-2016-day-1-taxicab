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
}

