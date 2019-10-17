<?php
    class NightsWatch {
        public $warriors = array();
        public function __constructor($warrior) {
            $this->warriors = $warriors;
        }
        public function recruit($warrior) {
            array_push($this->warriors, $warrior);
        }
        public function fight() {
            foreach ($this->warriors as $fighters) {
                if (method_exists($fighters, 'fight'))
                    $fighters->fight();
            }
        }
    }
?>