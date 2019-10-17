<?php
    class Jaime {
        public function sleepWith($className) {
            $partner = get_class($className);
            if ($partner == "Tyrion") {
                print("Not even if I'm drunk !");
            } else if ($partner == "Sansa") {
                print("Let's do this.");
            } else if ($partner == "Cersei") {
                print("With pleasure, but only in a tower in Winterfell, then.");
            }
            echo PHP_EOL;
        }
    }
?>