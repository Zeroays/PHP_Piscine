<?php
    class Tyrion {
        public function sleepWith($className) {
            $partner = get_class($className);
            if ($partner == "Jaime" || $partner == "Cersei") {
                print("Not even if I'm drunk !");
            } else if ($partner == "Sansa") {
                print("Let's do this.");
            }
            echo PHP_EOL;
            
        }
    }
?>