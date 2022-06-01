<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     *
     * @param string $input
     * @param int $length
     * @param string $padding
     * @param int $padType
     * @param string $result
     */
    public function testMbStrPad()
    {
        foreach ($this->provideDataForMbStrPad() as $item) {
            $this->assertEquals($item[4], mb_str_pad($item[0], $item[1], $item[2], $item[3]));
        }
    }

    private function provideDataForMbStrPad()
    {
        return [
            ['Nhiều byte string đệm', 0, ' ', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 0, ' ', STR_PAD_LEFT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 0, ' ', STR_PAD_RIGHT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 0, '充', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 0, '充', STR_PAD_LEFT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 0, '充', STR_PAD_RIGHT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 0, '煻充', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 20, ' ', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 20, ' ', STR_PAD_LEFT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 20, ' ', STR_PAD_RIGHT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 20, '充', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 20, '充', STR_PAD_LEFT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 20, '充', STR_PAD_RIGHT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 20, '煻充', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 21, ' ', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 21, ' ', STR_PAD_LEFT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 21, ' ', STR_PAD_RIGHT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 21, '充', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 21, '充', STR_PAD_LEFT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 21, '充', STR_PAD_RIGHT, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 21, '煻充', STR_PAD_BOTH, 'Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 22, ' ', STR_PAD_BOTH, 'Nhiều byte string đệm '],
            ['Nhiều byte string đệm', 22, ' ', STR_PAD_LEFT, ' Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 22, ' ', STR_PAD_RIGHT, 'Nhiều byte string đệm '],
            ['Nhiều byte string đệm', 22, '充', STR_PAD_BOTH, 'Nhiều byte string đệm充'],
            ['Nhiều byte string đệm', 22, '充', STR_PAD_LEFT, '充Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 22, '充', STR_PAD_RIGHT, 'Nhiều byte string đệm充'],
            ['Nhiều byte string đệm', 22, '煻充', STR_PAD_BOTH, 'Nhiều byte string đệm煻'],
            ['Nhiều byte string đệm', 23, ' ', STR_PAD_BOTH, ' Nhiều byte string đệm '],
            ['Nhiều byte string đệm', 23, ' ', STR_PAD_LEFT, '  Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 23, ' ', STR_PAD_RIGHT, 'Nhiều byte string đệm  '],
            ['Nhiều byte string đệm', 23, '充', STR_PAD_BOTH, '充Nhiều byte string đệm充'],
            ['Nhiều byte string đệm', 23, '充', STR_PAD_LEFT, '充充Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 23, '充', STR_PAD_RIGHT, 'Nhiều byte string đệm充充'],
            ['Nhiều byte string đệm', 23, '煻充', STR_PAD_BOTH, '煻Nhiều byte string đệm煻'],
            ['Nhiều byte string đệm', 24, ' ', STR_PAD_BOTH, ' Nhiều byte string đệm  '],
            ['Nhiều byte string đệm', 24, ' ', STR_PAD_LEFT, '   Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 24, ' ', STR_PAD_RIGHT, 'Nhiều byte string đệm   '],
            ['Nhiều byte string đệm', 24, '充', STR_PAD_BOTH, '充Nhiều byte string đệm充充'],
            ['Nhiều byte string đệm', 24, '充', STR_PAD_LEFT, '充充充Nhiều byte string đệm'],
            ['Nhiều byte string đệm', 24, '充', STR_PAD_RIGHT, 'Nhiều byte string đệm充充充'],
            ['Nhiều byte string đệm', 24, '煻充', STR_PAD_BOTH, '煻Nhiều byte string đệm煻充'],
            ['Nhiều byte string đệm', 25, '煻充', STR_PAD_BOTH, '煻充Nhiều byte string đệm煻充'],
            ['Nhiều byte string đệm', 26, '煻充', STR_PAD_BOTH, '煻充Nhiều byte string đệm煻充煻'],
        ];
    }
}
