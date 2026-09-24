<?php

    class StaticClass{
        public static $cname="tops tech";
        public const PI = 3.14;

        public static function test(){
            echo self::$cname;
            echo "<br>";
            echo "<br>static function called";
        }

    }

    echo StaticClass::$cname;
    StaticClass::test();

    echo "<br>";
    echo StaticClass::PI;

?>