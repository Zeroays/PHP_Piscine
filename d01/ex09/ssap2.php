#!/usr/bin/php
<?php
include '../ex03/ft_split.php';

function hierarchy($c) {
    if (ctype_alpha($c))
        return 1;
    else if (is_numeric($c)) 
        return 2;
    else
        return 3;
}

function ssap2($s1, $s2) {
    $i = 0;
    $min = strlen($s1) >= strlen($s2) ? strlen($s2) : strlen($s1);
    while ($i < $min) {
        if (strtolower($s1[$i]) != strtolower($s2[$i])) {
            if ((is_numeric($s1[$i]) && is_numeric($s2[$i])) || (ctype_alpha($s1[$i]) && ctype_alpha($s2[$i])) || (!ctype_alnum($s1[$i]) && !ctype_alnum($s2[$i]))) {
                return (strtolower($s1[$i]) < strtolower($s2[$i])) ? 1 : -1;
            }
            else {
                return (hierarchy(strtolower($s1[$i])) > hierarchy(strtolower($s2[$i]))) ? -1 : 1;
            }
        }
        $i++;
    }
    if (strlen($s1) > strlen($s2))
        return -1;
    else if (strlen($s1) < strlen($s2))
        return 1;
    else
        return 0;  
}

if ($argc >= 2) {
    $words = [];
    for ($i = 1; $i < $argc; $i++)
        $words = array_merge($words, ft_split($argv[$i]));
    usort($words, "ssap2");
    for ($i = sizeof($words) - 1; $i >= 0; $i--)
        echo $words[$i] . PHP_EOL;
}
?>
