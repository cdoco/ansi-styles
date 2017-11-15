<?php
/**
 * Convert
 *
 * @copyright Copyright (c) 2017 ZhangYue PHP Group
 * @author ZiHang Gao
 */

namespace Cdoco\Convert;

class Convert {

    /**
     * hex2rgb Function
     *
     * @param string $input hex string
     *
     * @author ZiHang Gao
     * @return array|bool
     */
    public static function hex2rgb($input) {
        if (substr(trim($input), 0, 1) === '#') {
            $input = substr($input, 1);
        }
        if ((strlen($input) < 2) || (strlen($input) > 6)) {
            return false;
        }
        $values = str_split($input);

        if (strlen($input) === 2) {
            $r = intval($values[0] . $values[1], 16);
            $g = $r;
            $b = $r;
        } else if (strlen($input) === 3) {
            $r = intval($values[0], 16);
            $g = intval($values[1], 16);
            $b = intval($values[2], 16);
        } else if (strlen($input) === 6) {
            $r = intval($values[0] . $values[1], 16);
            $g = intval($values[2] . $values[3], 16);
            $b = intval($values[4] . $values[5], 16);
        } else {
            return false;
        }
        return array($r, $g, $b);
    }

    /**
     * hsl2rgb Function
     *
     * @param array $input hsl string
     *
     * @author ZiHang Gao
     * @return array
     */
    public static function hsl2rgb($input) {
        $h = max(min(intval($input[0], 10), 360), 0) / 360;
        $s = max(min(intval($input[1], 10), 100), 0) / 100;
        $l = max(min(intval($input[2], 10), 100), 0) / 100;

        if ($l <= 0.5) {
            $v = $l * (1 + $s);
        } else {
            $v = $l + $s - $l * $s;
        }
        if ($v === 0) {
            return [0, 0, 0];
        }
        $min = 2 * $l - $v;
        $sv = ($v - $min) / $v;
        $h = 6 * $h;
        $six = floor($h);
        $fract = $h - $six;
        $vsfract = $v * $sv * $fract;
        switch ($six) {
            case 1:
                $r = $v - $vsfract;
                $g = $v;
                $b = $min;
                break;
            case 2:
                $r = $min;
                $g = $v;
                $b = $min + $vsfract;
                break;
            case 3:
                $r = $min;
                $g = $v - $vsfract;
                $b = $v;
                break;
            case 4:
                $r = $min + $vsfract;
                $g = $min;
                $b = $v;
                break;
            case 5:
                $r = $v;
                $g = $min;
                $b = $v - $vsfract;
                break;
            default:
                $r = $v;
                $g = $min + $vsfract;
                $b = $min;
                break;
        }
        return [round($r * 255), round($g * 255), round($b * 255)];
    }
}