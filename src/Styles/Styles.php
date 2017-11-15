<?php
/**
 * Styles
 *
 * @copyright Copyright (c) 2017 ZhangYue PHP Group
 * @author ZiHang Gao
 */

namespace Cdoco\Styles;

use Cdoco\Convert\Convert;

class Styles {

    /**
     * @var array
     */
    public $styles;

    /**
     * @var int
     */
    protected $offset = 0;

    /**
     * @var string
     */
    public $open;

    /**
     * @var string
     */
    public $close = "\033[39m";

    /**
     * Rgb Function
     *
     * @param integer $r R
     * @param integer $g G
     * @param integer $b B
     *
     * @author ZiHang Gao
     * @return string
     */
    public function rgb($r, $g, $b) {
        $offset = 38 + $this->offset;
        return $this->open = "\033[{$offset};2;{$r};{$g};{$b}m";
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
     */
    public function hsl($h, $s, $l) {
        list($r, $g, $b) = Convert::hsl2rgb([$h, $s, $l]);
        return $this->rgb($r, $g, $b);
    }

    /**
     * Hex Function
     *
     * @param string $hex Hex
     *
     * @author ZiHang Gao
     * @return string
     */
    public function hex($hex) {
        list($r, $g, $b) = Convert::hex2rgb($hex);
        return $this->rgb($r, $g, $b);
    }

    /**
     * Get Function
     *
     * @param string $color color
     *
     * @author ZiHang Gao
     * @return $this
     */
    public function __get($color) {
        $style = $this->styles[$color];
        $this->open = "\033[{$style[0]}m";
        $this->close = "\033[{$style[1]}m";
        return $this;
    }

    /**
     * Call Function
     *
     * @param string $color color
     * @param array $arguments arguments
     *
     * @author ZiHang Gao
     * @return string
     */
    public function __call($color, $arguments) {
        $style = $this->styles[$color];
        return "\033[{$style[0]}m{$arguments[0]}\033[{$style[1]}m";
    }
}
