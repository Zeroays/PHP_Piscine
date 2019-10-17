<?php
    function ft_split($str) {
        $result = array_filter(explode(" ",$str), 'strlen');
        sort($result);
        return ($result);
    }
?>
