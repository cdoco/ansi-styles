<?php
/**
 * BgColor
 *
 * @copyright Copyright (c) 2017 ZhangYue PHP Group
 * @author ZiHang Gao
 */

namespace Cdoco\Styles;

class BgColor extends Styles {

    /**
     * @var int
     */
    protected $offset = 10;

    /**
     * @var string
     */
    public $close = "\033[49m";

    /**
     * @var array
     */
    public $styles = [
        'bgBlack' => [40, 49],
        'bgRed' => [41, 49],
        'bgGreen' => [42, 49],
        'bgYellow' => [43, 49],
        'bgBlue' => [44, 49],
        'bgMagenta' => [45, 49],
        'bgCyan' => [46, 49],
        'bgWhite' => [47, 49],

        // Bright color
        'bgBlackBright' => [100, 49],
        'bgRedBright' => [101, 49],
        'bgGreenBright' => [102, 49],
        'bgYellowBright' => [103, 49],
        'bgBlueBright' => [104, 49],
        'bgMagentaBright' => [105, 49],
        'bgCyanBright' => [106, 49],
        'bgWhiteBright' => [107, 49]
    ];
}
