<?php 
//session_start();

require 'CommissionEmployee.php';
require 'PieceWorker.php';


if(isset($_POST['deleteEmployee'])){
  $commissionemployee = new CommissionEmployee();
  $name = $_POST['name'];
  $commissionemployee->remove($name );

}


if(isset($_POST['addEmployee'])){
    //getting value from input fields
    $name = $_POST['name'];
    $age = $_POST['age'];
    $company = $_POST['company'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    //instantiate the classes
    $commissionemployee = new CommissionEmployee();
    $pieceWorker = new PieceWorker();
   

    //set value to Commission Employee
    $commissionemployee->setName($name );
    $commissionemployee->setAge($age );
    $commissionemployee->setCompany($company );
    $commissionemployee->setGender($gender );
    $commissionemployee->setAddress($address);
    $commissionemployee->setPosition($position);
    $commissionemployee->setSalary($salary);
    $commissionemployee->setTotalSalary($salary);

    //set value to Piece Worker
    $pieceWorker->setName($name );
    $pieceWorker->setAge($age );
    $pieceWorker->setCompany($company );
    $pieceWorker->setGender($gender );
    $pieceWorker->setAddress($address);
    $pieceWorker->setPosition($position);
    $pieceWorker->setSalary($salary);
    $pieceWorker->setTotalSalary(5);

  
    
    if(isset($_POST['position']) == "CommisionWorker"){
        $commissionemployee->addEmployee( $commissionemployee);
     
    }else{
        $pieceWorker->addEmployee( $pieceWorker);
    }
   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<br><br>


<center>
<div class="container" style="width:50%;">
  <form action="" method="post">
  <input type="hidden"  id="id" name="id" >
    <div class="row">
      <div class="col-25">
        <label for="fname">Employee Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Age</label>
      </div>
      
      <div class="col-75">
        <input type="text" id="age" name="age" placeholder="Age..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Company</label>
      </div>
      
      <div class="col-75">
        <input type="text" id="company" name="company" placeholder="Company..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Address</label>
      </div>
      
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="You City Address..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Salary</label>
      </div>
      
      <div class="col-75">
        <input type="text" id="salary" name="salary" placeholder="Salary..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Position</label>
      </div>
      <div class="col-75">
        <select id="position" name="position">
           <option value="CommissionWorker">Commission Worker</option>
          <option value="PieceWorker">Piece Worker</option>
         
        </select>
      </div>
    </div>
    
    <br>
    
    <div class="row" >
    
    <input type="radio" class="radio" name="gender"   value="Female" id="gender" />
    <label for="y">Female</label>
    <input type="radio" class="radio" name="gender"  value="Male"  id="gender"/>
    <label for="z">Male</label>
   
    </div>
    

    <div class="row">
   
      <input type="submit" name="addEmployee" value="Submit">
      <input style="float:left; margin-left:450px; display:none;" type="submit" id="delete" name="deleteEmployee" value="Delete">
    </div>
  </form>
</div></center>


<script src="jquery-3.4.1.min.js"></script>
    <script src="jquery-3.4.1.js"></script>
<script>
    
    var table = document.getElementById('table');
    
    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
           
             //rIndex = this.rowIndex;
             document.getElementById("name").value = this.cells[0].innerHTML;
             document.getElementById("age").value = this.cells[1].innerHTML;
             document.getElementById("company").value = this.cells[2].innerHTML;
             document.getElementById("gender").value = this.cells[3].innerHTML;
            document.getElementById("address").value = this.cells[4].innerHTML;
            document.getElementById("position").value = this.cells[5].innerHTML;
             document.getElementById("salary").value = this.cells[6].innerHTML;

             document.getElementById("delete").style.display ="block";
            
            
        };
    }
   

</script>


</body>
</html>