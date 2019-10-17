#!/usr/bin/php
<?php
include '../ex03/ft_split.php';
    if ($argc >= 2) {
        $words = [];
        for ($i = 1; $i < $argc; $i++) {
            $words = array_merge($words, ft_split($argv[$i]));
        } 
        sort($words);
        echo implode("\n", $words)."\n";
    }
?>