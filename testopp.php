<!doctype html>
<html>
<head>
    <title>Test Oop</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<style>



</style>
<body>
<h2>Employee Details</h2>
<a href="Employee.php" class="c1">back to Employee Home</a>
<?php

require 'employee.ic.inc';
//lw mgp4 el file stop lkn include hegeb bs warning complete 3dy
$emp1=new Employee;
$emp1->name="Romooooo";
$emp1->id=10;
$emp1->position="programmer";
$emp1->age=20;
$emp1->salary=8000;
$emp1->displayDetails();
$emp1->create();
$result=$emp1->getAll();
$dataEmp=new Employee();
while ($row=mysqli_fetch_assoc($result))
{
    $dataEmp ->name = $row['NAME'];
    $dataEmp->id=$row['EMP_ID'];
}
?>

</body>
</html>