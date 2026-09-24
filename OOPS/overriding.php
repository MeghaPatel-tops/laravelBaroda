<?php

// final class Test{
//       public function display(){
//             echo "<br>Parent class method";
//         }
// }
    class ParentClass  {
        public function display(){
            echo "<br>Parent class method";
        }
    }

    class ChildClass extends ParentClass{
          public function display(){
            echo "<br>Child class method";
        }
    }

    $c1 = new ChildClass();
    $c1->display();



?>