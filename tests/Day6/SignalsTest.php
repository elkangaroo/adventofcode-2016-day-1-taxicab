<?php

use Advent\Day6\Signals;

class SignalsTest extends PHPUnit_Framework_TestCase
{
    private $signals;

    protected function setUp()
    {
        $this->signals = new Signals();
    }

    public function testDecode_Example()
    {
        $input = <<<'EOT'
eedadn
drvtee
eandsr
raavrd
atevrs
tsrnev
sdttsa
rasrtv
nssdts
ntnada
svetve
tesnvt
vntsnd
vrdear
dvrsen
enarar
EOT;

        $this->assertEquals('easter', $this->signals->decode($input));
    }
}

