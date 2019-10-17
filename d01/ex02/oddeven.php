#!/usr/bin/php
<?php
while (! feof(STDIN)) {
    echo "Enter a number: ";
    $data = trim(fgets(STDIN));
    if (feof(STDIN)) {
        echo "\n";
        exit ();
    }
    if (is_numeric($data))
        echo ($data % 2 == 0 ? "The number ".$data." is even\n" : "The number ".$data." is odd\n");
    else
        echo "'".$data."'"." is not a number\n";  
}
?>