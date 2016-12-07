<?php

namespace Advent;

class Taxicab
{
    /**
     * @param string $directions
     * @return int
     */
    public function calculateShortestPath($directions)
    {
        $position = new Position(0, 0);

        $directions = explode(', ', $directions);
        foreach ($directions as $direction) {
            $length = substr($direction, 1);
            switch ($direction[0]) {
                case 'L':
                    $position->turnLeft();
                    $position->move($length);
                    break;
                case 'R':
                    $position->turnRight();
                    $position->move($length);
                    break;
            }
        }

        return abs($position->getX() - 0) + abs($position->getY() - 0);
    }
}

