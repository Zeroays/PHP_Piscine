#!/usr/bin/php
<?php
    if ($argc == 2) {
        $results = array();
        preg_match('/^\s{0,}(\d+)\s{0,}(\+|-|\/|\*|%)\s{0,}(\d+)\s{0,}$/', $argv[1], $results);
        $operations = array (
            "+" => function($equation) {
                return ((double)$equation[1] + (double)$equation[3]);
            },
            "-" => function($equation) {
                return ((double)$equation[1] - (double)$equation[3]);
            },
            "/" => function($equation) {
                return ((double)$equation[1] / (double)$equation[3]);
            },
            "*" => function($equation) {
                return ((double)$equation[1] * (double)$equation[3]);
            },
            "%" => function($equation) {
                return ((double)$equation[1] % (double)$equation[3]);
            }
        );
        if ($results)
            echo $operations[$results[2]]($results) . PHP_EOL;
        else
            echo "Syntax Error" . PHP_EOL;
    }
    else
        echo "Incorrect Parameters" . PHP_EOL;
?>
