<?php
    function ft_is_sort($words) {
        for ($i = 0; $i < count($words) - 1; $i++)
            if ((strcmp($words[$i], $words[$i + 1])) > 0)
                return false;
        return true;
    }   
?>