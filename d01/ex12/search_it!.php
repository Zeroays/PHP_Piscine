#!/usr/bin/php
<?php
    if ($argc >= 3) {
        for ($i = $argc - 1; $i >= 2; $i--) {
            $results = explode(':', $argv[$i]);
            if (!(strcmp($results[0], $argv[1])) && !(in_array("", $results))) {
                if (array_key_exists(1, $results))
                    echo $results[1] . PHP_EOL;
                break;
            }
        }
    }
    else
        echo "";
?>