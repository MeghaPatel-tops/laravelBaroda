<?php
   class Student{
       //data member
       public $sid;
       public $studentName;
       public $email;

       //member function

       function printStudentInfo(){
           echo "<h1>Sid: $this->sid Name:$this->studentName email:$this->email</h1>";
       }
   }    
   $student1 = new Student();//
   $student1->sid=101;
   $student1->studentName="Jhon";
   $student1->email="j@test.com";
   $student1->printStudentInfo();

   $s2 = new Student();
   $s2->sid=102;
   $s2->studentName="abc";
   $s2->email="abc@gmail.com";
   $s2->printStudentInfo();

   echo "<hr>";
   echo "<h2> welcome to app:$student1->studentName</h2>"

    

?>