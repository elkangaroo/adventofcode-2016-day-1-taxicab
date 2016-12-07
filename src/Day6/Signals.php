<?php

namespace Advent\Day6;

class Signals
{
    /**
     * @param string $input
     * @param callable $sort
     * @return string
     */
    public function decode($input, callable $sort)
    {
        $signals = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            $signals = array_map(function($a, $b) {
                return $a . $b; 
            }, $signals, str_split($line));
        }

        $decoded = array_map(function($line) use ($sort) {
            $chars = count_chars($line, 1);
            $sort($chars);

            return chr(key($chars));
        }, $signals);

        return implode('', $decoded);
    }
}

