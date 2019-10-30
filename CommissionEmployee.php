<?php
session_start();
require 'Employee.php';
require 'EmployeeRooster.php';

class CommissionEmployee extends Employee implements EmployeeRooster{

    public $salary = 0;
    public $position;
    public $soldItem = 5;
    public $soldPerItemPrice = 100;
    public $totalSalary = 0;

   
    public function __construct(){}
   
    public function getSalary(){
    
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary =$salary;
    }

    public function getTotalSalary(){
        $this->totalSalary = $this->soldItem * $this->soldPerItemPrice +  $this->totalSalary;
        return $this->totalSalary;
    }
    public function setTotalSalary($totalSalary){
        $this->totalSalary =$totalSalary;
    }

    public function getPosition(){
    
        return $this->position;
    }
    public function setPosition($position){
        $this->position =$position;
    }

    public function getSoldItem(){
    
        return $this->soldItem;
    }
    public function setSoldItem($soldItem){
        $this->soldItem = $soldItem;
    }

    public function addEmployee(Employee $emp){
      
        if(isset($_SESSION['original'])){
            $newArray = $_SESSION['original'];
           
        }else{
            $newArray = array();
         
        }
      
        $emp->getName ();
        $emp->getAge ();
        $emp->getCompany ();
        $emp->getGender ();
        $emp->getAddress ();
        $emp->getPosition ();
        $emp->getSalary ();
        $emp->getTotalSalary ();
        $emp = (array)$emp;
        array_push($newArray, $emp);

        //print_r($newArray);
        $_SESSION['original'] = $newArray;

        $ce = new CommissionEmployee();
       $ce-> display($newArray);
       $ce-> countCE($newArray);
       $ce-> countPW($newArray);
      
}

    public function display($newArray){

        ?>
      <table class="hoverTable" id="table">
      <caption>Student Attaindee</caption>
      
        <tr>
       
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Company</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">Position</th>
          <th scope="col">Salary</th>
          <th scope="col">Total Salary</th>
        </tr>
      <?php
      
        for ($x = 0; $x < sizeOf($newArray); $x++) {
            ?>
       
      
          <tr>
          <td><?php echo $newArray[$x]['name'] ?></td>
          <td><?php echo $newArray[$x]['age'] ?></td>
          <td><?php echo $newArray[$x]['company'] ?></td>
          <td><?php echo $newArray[$x]['gender'] ?></td>
          <td><?php echo $newArray[$x]['address'] ?></td>
          <td><?php echo $newArray[$x]['position'] ?></td>
          <td><?php echo $newArray[$x]['salary'] ?></td>
          <td><?php echo $newArray[$x]['totalSalary'] ?></td>
             
              
          </tr>
        
      <?php
      
    }
    ?> 
     </table><br><br><br>
    <?php

    }
    public function countCE($newArray){

        $countCE = 0;
      
        for ($x = 0; $x < sizeOf($newArray); $x++) {
            if($newArray[$x]['position'] == "CommissionWorker"){
                $countCE++;
         
        }
       }
       ?>
        <table class="hoverTable" id="table">
       <tr>
       <th scope="col"><?php echo "No. of Commission Employee: " .$countCE; ?></th>
      
       </tr>
       </table>
   <?php
    }

    public function countPW($newArray){

     
        $countPW = 0;
        for ($x = 0; $x < sizeOf($newArray); $x++) {
            if($newArray[$x]['position'] == "PieceWorker"){
                $countPW++;
         
        }
       }
       ?>
        <table class="hoverTable" id="table">
       <tr>
       <th scope="col"><?php echo "No. of Piece Worker: " .$countPW; ?></th>
       </tr>
       </table>
   <?php
    }


    public function remove($name){

       
        for ($x = 0; $x < sizeOf($_SESSION['original']); $x++) {
         
            if($_SESSION['original'][$x]['name'] == $name){
                array_pop($_SESSION['original']);
                break;
        }
       }
   
      
    }
}

?>

