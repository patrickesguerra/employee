<?php

class Employee{

    public $name;
    public $age;
    public $company;
    public $gender;
    public $address;
    public function __construct(){}
    /*public function __construct($name,$age,$company,$gender,$address)
	{
        $this->name =$name;
        $this->age =$age;
        $this->company =$company;
        $this->gender =$gender;
        $this->address =$address;
	
    }*/
    public function getName(){
    
        return $this->name;
    }
    public function setName($name){
        $this->name =$name;
    }

    public function getAge(){
    
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function getCompany(){
    
        return $this->company;
    }
    public function setCompany($company){
        $this->company = $company;
    }

    public function getGender(){
    
        return $this->gender;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getAddress(){
    
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }
   
   

    public function displayCE(){
        $emp = new Employee();
        for ($x = 0; $x < sizeOf($emp); $x++) {
         $new_array = array($emp->getName());

       
        print_r($new_array);
        }
    }
      
}
?>