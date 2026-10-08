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

         public function selectData($table){
             $query = "select * from $table";
             $req = $this->con->query($query);
             while($row=$req->fetch_object()){
                 $rw[]=$row;
             }
             return $rw;
         }   
         
         public function deleteData($col,$val,$table){
            $query = "delete from $table where $col = $val";
            $req= $this->con->query($query);
            return true;

         }

         public function selectWhere($table,$whereKey ,$whereVal){
            $query = "select * from $table where $whereKey = '$whereVal'";
            $req = $this->con->query($query);
            $row = $req->fetch_object();
            return $row;
         }

         public function updateData($table,$data,$where){
               //update table set pname:'abc',price,   where pid=1;
               $query= "update $table set ";
               $count = count($data);
            
               $i=1;
               foreach($data as $key=>$val){
                if($i > $count-1){
                    $query .= $key ." = '". $val ."' ";
                }
                else{
                    $query .= $key ." = '". $val ."' ,";
                }
                 
                   $i++;
               }
               $query .= 'Where 1=1 ';
                foreach($where as $key=>$val){
                    $query .= " AND ". $key . " = '" .$val."'";      

                }
              $req = $this->con->query($query);
              return true;
         }
        
   }



?>