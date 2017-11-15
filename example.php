<?php

require_once 'vendor/autoload.php';

$styles = new \Cdoco\AnsiStyles();

//blue
//第一种用法
print($styles->underline(
    $styles->bgRed(
        $styles->blue("Hello Word!" . PHP_EOL)
    ))
);

//第二种用法
print("{$styles->color->blue->open}Hello Word!\n{$styles->color->blue->close}");
//第三种用法
print("{$styles->blue->open}Hello Word!\n{$styles->blue->close}");

print("{$styles->bgBlue->open}Hello Word!\n{$styles->bgBlue->close}");
print("{$styles->bold->open}Hello Word!\n{$styles->bold->close}");

echo $styles->color->rgb(100, 200, 15) . "Hello Word!" . PHP_EOL . $styles->color->close;
echo $styles->color->hsl(120, 100, 60) . "Hello Word!" . PHP_EOL . $styles->color->close;
echo $styles->color->hex('#C0FFEE') . "Hello Word!" . PHP_EOL . $styles->color->close;

echo $styles->bgColor->rgb(100, 200, 15) . "Hello Word!" . PHP_EOL . $styles->bgColor->close;
echo $styles->bgColor->hsl(120, 100, 60) . "Hello Word!" . PHP_EOL . $styles->bgColor->close;
echo $styles->bgColor->hex('#C0FFEE') . "Hello Word!" . PHP_EOL . $styles->bgColor->close;