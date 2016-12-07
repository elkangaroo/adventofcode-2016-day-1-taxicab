<?php

namespace Advent\Day6;

class Signals
{
    /**
     * @param string $input
     * @return string
     */
    public function decode($input)
    {
        $signals = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            $signals[0] .= $line[0];
            $signals[1] .= $line[1];
            $signals[2] .= $line[2];
            $signals[3] .= $line[3];
            $signals[4] .= $line[4];
            $signals[5] .= $line[5];
        }

        $decoded = array_map(function($line) {
            $chars = count_chars($line, 1);
            arsort($chars);

            return chr(key($chars));
        }, $signals);

        return implode('', $decoded);
    }
}

