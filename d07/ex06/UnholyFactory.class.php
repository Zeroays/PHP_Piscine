<?php
    class UnholyFactory {
        public function __construct() {
            $this->fighters = array();
        }
        public function fabricate($fighter_name) {
            foreach ($this->fighters as $fighter) {
                if (!strcmp($fighter_name, $fighter->type)) {
                    print("(Factory fabricates a fighter of type " . $fighter_name . ")" . PHP_EOL);
                    return ($fighter);
                }
            }
            print("(Factory hasn't absorbed any fighter of type " . $fighter_name . ")" . PHP_EOL);
        }
        public function absorb($fighter_class) {
            if (isset($fighter_class->type) && !in_array($fighter_class, $this->fighters)) {
                print ("(Factory absorbed a fighter of type " . $fighter_class->type . ")" . PHP_EOL);
                $this->fighters[] = $fighter_class;
            } else if (in_array($fighter_class, $this->fighters)) {
                print ("(Factory already absorbed a fighter of type " . $fighter_class->type . ")" . PHP_EOL);
            } else {
                print ("(Factory can't absorb this, it's not a fighter") . ")" . PHP_EOL;
            }
        }
    }
?>