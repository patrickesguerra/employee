<?php 

interface EmployeeRooster{

    public function addEmployee(Employee $emp);
    public function display($emp);
    public function countCE($emp);
    public function countPW($emp);
    public function remove($emp);
}
?>