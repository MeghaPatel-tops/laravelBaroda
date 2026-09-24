<?php
   class Model{
         public $con;
         public function __construct(){
              $this->con = new Mysqli("localhost","root","","mvcdb");
              
         }

         public function insertData($table,$inData){
            
              $key = implode(",",array_keys($inData));
              $values = implode("','",array_values($inData));
              $query="insert into $table($key)values('$values')";
              $this->con->query($query);
              return true;


         }
        
   }



?>