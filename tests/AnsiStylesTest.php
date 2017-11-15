<?php
/**
 * AnsiStylesTest
 *
 * @copyright Copyright (c) 2017 ZhangYue PHP Group
 * @author ZiHang Gao
 */

class AnsiStylesTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var \Cdoco\AnsiStyles
     */
    private $styles;

    /**
     * SetUp Function
     *
     * @author ZiHang Gao
     * @return void
     */
    protected function setUp() {
        $this->styles = new \Cdoco\AnsiStyles();
    }

    /**
     * TestBlue Function
     *
     * @author ZiHang Gao
     * @return void
     */
    public function testBlue() {
        $this->assertEquals("\033[34mtext\033[39m", $this->styles->color->blue("test"));
    }
}