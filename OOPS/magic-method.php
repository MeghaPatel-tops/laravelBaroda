<?php
 class Person{
      private $appkey = "mcbsnbn456654";
      public $name="abc";

      public function __get($prop){
          echo "Private data access $prop";
      }

      public function __set($prop,$val){
        echo "<br>You cant chane private data of class varible$prop";
      }

      public function __call($method,$arg){
           echo "<br>Method doesnt exits  $method<br>";
      }

      public function __toString(){
           $data=['appkey'=>$this->appkey];
          return    implode(" ",$data);
      }
    public function __clone()
    {
       $this->name =  $this->name;
        echo "<br>Object has been cloned";
    }
 }


 $p1 = new Person();
 echo $p1->appkey;

 $p1->appkey = "hmvbnbvnb";

 $p1->getUser();


 echo $p1;

 $p2= clone $p1;
      

 echo "<br>$p2->name";

 $p2->name = "xyz";

  echo "<br>$p2->name";

  echo "<br>p1 of name=$p1->name";


?>