<?php
/**
 * Ansi Styles
 *
 * @copyright Copyright (c) 2017 ZhangYue PHP Group
 * @author ZiHang Gao
 */

namespace Cdoco;

use Cdoco\Styles\Styles;
use Cdoco\Styles\Modifier;
use Cdoco\Styles\Color;
use Cdoco\Styles\BgColor;

class AnsiStyles {

    /**
     * @var Modifier
     */
    public $modifier;

    /**
     * @var Color
     */
    public $color;

    /**
     * @var BgColor
     */
    public $bgColor;

    /**
     * AnsiStyles constructor.
     */
    public function __construct() {
        $this->modifier = new Modifier();
        $this->color = new Color();
        $this->bgColor = new BgColor();
    }

    /**
     * Get Function
     *
     * @param string $color color
     *
     * @author ZiHang Gao
     * @return Styles
     */
    public function __get($color) {

        if (key_exists($color, $this->color->styles)) {
            return $this->color->$color;
        } elseif (key_exists($color, $this->modifier->styles)) {
            return $this->modifier->$color;
        } elseif (key_exists($color, $this->bgColor->styles)) {
            return $this->bgColor->$color;
        }

        return new Styles();
    }

    /**
     * Call Function
     *
     * @param string $color color
     * @param array $arguments arguments
     *
     * @author ZiHang Gao
     * @return mixed
     */
    public function __call($color, $arguments) {

        if (key_exists($color, $this->color->styles)) {
            return $this->color->$color($arguments[0]);
        } elseif (key_exists($color, $this->modifier->styles)) {
            return $this->modifier->$color($arguments[0]);
        } elseif (key_exists($color, $this->bgColor->styles)) {
            return $this->bgColor->$color($arguments[0]);
        }

        return '';
    }
}
