<?php
    function userExists() {
        $contents = unserialize(file_get_contents("../htdocs/private/passwd"));
        foreach ($contents as $users) {
            if ($_POST['login'] === $users['login'])
                return (1);
        }
        return (0);
    }
    if ($_POST['login'] != NULL && $_POST['oldpw'] != NULL && $_POST['newpw'] != NULL && $_POST['submit'] === "OK" && userExists()) {
        $contents = unserialize(file_get_contents("../htdocs/private/passwd"));
        for ($i = 0; $i < sizeof($contents); $i++) {
            if ($_POST['login'] == $contents[$i]['login'] && hash('md5', $_POST['oldpw']) == $contents[$i]['passwd']) {
                echo "OK\n";
                $contents[$i]['passwd'] = hash('md5', $_POST['newpw']);
            } else {
                echo "ERROR\n";
                exit(0);
            }
        }
        file_put_contents("../htdocs/private/passwd", serialize($contents));
    }
    else {
        echo "ERROR\n";
    }
?>