<?php
/**
 * Color
 *
 * @copyright Copyright (c) 2017 ZhangYue PHP Group
 * @author ZiHang Gao
 */

namespace Cdoco\Styles;

class Color extends Styles {

    /**
     * @var array
     */
    public $styles = [
        'black' => [30, 39],
        'red' => [31, 39],
        'green' => [32, 39],
        'yellow' => [33, 39],
        'blue' => [34, 39],
        'magenta' => [35, 39],
        'cyan' => [36, 39],
        'white' => [37, 39],
        'gray' => [90, 39],

        // Bright color
        'redBright' => [91, 39],
        'greenBright' => [92, 39],
        'yellowBright' => [93, 39],
        'blueBright' => [94, 39],
        'magentaBright' => [95, 39],
        'cyanBright' => [96, 39],
        'whiteBright' => [97, 39]
    ];
}
