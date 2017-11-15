<?php
/**
 * Modifier
 *
 * @copyright Copyright (c) 2017 ZhangYue PHP Group
 * @author ZiHang Gao
 */

namespace Cdoco\Styles;

class Modifier extends Styles {

    /**
     * @var array
     */
    public $styles = [
        'reset' => [0, 0],
        // 21 isn't widely supported and 22 does the same thing
        'bold' => [1, 22],
        'dim' => [2, 22],
        'italic' => [3, 23],
        'underline' => [4, 24],
        'inverse' => [7, 27],
        'hidden' => [8, 28],
        'strikethrough' => [9, 29]
    ];

    /**
     * Rgb Function
     *
     * @param integer $r R
     * @param integer $g G
     * @param integer $b B
     *
     * @author ZiHang Gao
     * @return string
     * @throws \ErrorException
     */
    public function rgb($r, $g, $b) {
        throw new \ErrorException('not support rgb');
    }

    /**
     * Hsl Function
     *
     * @param integer $h H
     * @param integer $s S
     * @param integer $l L
     *
     * @author ZiHang Gao
     * @return string
     * @throws \ErrorException
     */
    public function hsl($h, $s, $l) {
        throw new \ErrorException('not support hsl');
    }

    /**
     * Hex Function
     *
     * @param string $hex Hex
     *
     * @author ZiHang Gao
     * @return string
     * @throws \ErrorException
     */
    public function hex($hex) {
        throw new \ErrorException('not support hex');
    }

}
