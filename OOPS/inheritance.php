<?php
class Person{
    public $name;
    public $email;
    public $contact;

    public function __construct($name,$email,$contact){
        $this->name=$name;
        $this->email=$email;
        $this->contact=$contact;
    }
    
}

class Employee extends Person{
    public $des;
    public $salary;

    public function __construct($des,$salary,$name,$email,$contact){
        parent::__construct($name,$email,$contact);
        $this->des= $des;
        $this->salary=$salary;
    }

    public function printSlip(){
        echo "Employee Name:$this->name<br>";
        echo "Employee Email:$this->email<br>";
        echo "Employee Conatct:$this->contact<br>";
        echo "Employee Des:$this->des<br>";
        echo "Employee salary:$this->salary<br>";
    }
}

$emp1 = new Employee("software Developer",20000,"John","jhon@gmail.com","090909090");
$emp1->printSlip();







?>