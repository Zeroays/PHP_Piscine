<?php
    function auth($login, $passwd) {
        $content = unserialize(file_get_contents("../htdocs/private/passwd"));
        foreach ($content as $users) {
            if ($users['login'] === $login && $users['passwd'] === hash('md5', $passwd))
                return true;
        }
        return false;
    }
?>