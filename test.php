<?php
    interface school{
        public function name();
        public function age();
    }

    class teacher implements school {
        public  $name = "张三";
        public $age = 25;

        public function __construct($name , $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function name() {
            return $this->name = 1;
        }
        public function age(){
            return $this->age = 2;
        }
        public function info() {
            return "我叫". $this->name() . "我" . $this->age();
        }
    }

    $info = new teacher("王五无无", 35);
    echo $info->info();
