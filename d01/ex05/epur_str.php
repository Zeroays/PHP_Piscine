#!/usr/bin/php
<?php
    if ($argc >= 2) {
        $split = array_filter(explode(" ", $argv[1]));
        echo implode(" ", $split) . PHP_EOL;
    }
?>
