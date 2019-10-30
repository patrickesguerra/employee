<?php


class PieceWorker extends Employee{

    public $salary = 0;
    public $position;
    public $completeItem = 5;
    public $totalSalary = 0;
   
    public function __construct(){}
   
        public function getSalary(){
    
            return $this->salary;
        }
        public function setSalary($salary){
            $this->salary =$salary;
        }
    
        public function getTotalSalary(){
            $this->totalSalary = $this->totalSalary *  $this->salary;
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
      
}
?>