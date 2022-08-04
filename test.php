<?php

use dekor\ArrayToTextTable;

require __DIR__ . '/vendor/autoload.php';

$data = [
    [
        'sum' => 10.999,
    ],
    [
        'sum' => 222,
    ],
    [
        'sum' => 7,
    ],
    [
        'sum' => 0,
    ],
];

$format = [
    'padding' => 'left',
    'number' => '%.2f',
];

echo (new ArrayToTextTable($data))->render() . PHP_EOL;

echo (new ArrayToTextTable($data, $format))->render() . PHP_EOL;
