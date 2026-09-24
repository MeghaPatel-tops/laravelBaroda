<?php
    interface Model{
        public function insertData($table);

    }

    class Controller implements Model{
        public function insertData($table){
            echo "insert into $table('username','email')values('abc','abc')";
        }
    }

    $c1 = new Controller();
    $c1->insertData("usertable");


?>