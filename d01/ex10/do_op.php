#!/usr/bin/php
<?php
    if ($argc == 4) {
        $operations = array (
            "+" => function($argv) {
                return ((double)$argv[1] + (double)$argv[3]);
            },
            "-" => function($argv) {
                return ((double)$argv[1] - (double)$argv[3]);
            },
            "/" => function($argv) {
                return ((double)$argv[1] / (double)$argv[3]);
            },
            "*" => function($argv) {
                return ((double)$argv[1] * (double)$argv[3]);
            },
            "%" => function($argv) {
                return ((double)$argv[1] % (double)$argv[3]);
            }
        );
        echo $operations[trim($argv[2])]($argv) . PHP_EOL;
    }
    else
        echo "Incorrect Parameters" . PHP_EOL;
?>
