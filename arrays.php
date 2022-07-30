<?php

$array = [
    1 => "um",
    2 => "dois",
    3 => "tres"
];

foreach ($array as $key => $value) {
    echo "$key em portugues é: $value" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;