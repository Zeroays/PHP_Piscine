#!/usr/bin/php
<?php
include '../ex03/ft_split.php';
    if ($argc >= 2) {
        $result = array_filter(explode(" ",$argv[1]), 'strlen');
        $result = array_values($result);
        for ($i = 1; $i < count($result); $i++)
            echo $result[$i]." ";
        if (array_key_exists(0, $result))
            echo $result[0]."\n";
    }
?>
