<!doctype html>
<html>
<head>
    <title>employee Query</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<style>

    .c1{
        text-decoration: none;
        margin-left: 50px;
        margin-bottom: 5px;
        font-size: 20px;
        font-family: sans-serif;
    }


</style>
<body>
<?php include ('header.inc')?>

<h2>Employee Details</h2>
<a href="Employee.php" class="c1">back to Employee Home</a>

    <?php
    require 'employee.ic.inc';
    $id=$_GET["empid"];

    $emp1=new Employee;
    $result=$emp1->details($id);
    $dataEmp=new Employee();
    while ($row=mysqli_fetch_assoc($result))
    {
//        $dataEmp ->id = $row['ID'];
//        $dataEmp ->name = $row['NAME'];
//        $dataEmp->age=$row['DEP_ID'];

        echo "<h3>Employee ID :".$row["ID"]."</h3>";
        echo "<h3>Employee Name :".$row["NAME"]."</h3>";
        echo "<h3>Department Id :".$row["DEP_ID"]."</h3>";
    }
//    $id=$_GET["empid"];
//
//    $connection = mysqli_connect('localhost' ,'root' , '' , "company");
//    if (!$connection){
//        die("error : ".$connection);
//    }
//    //mysqli_select_db("test");
//    $query = "select * from employee where id =$id";
//    $result = mysqli_query($connection , $query);
//    while($row = mysqli_fetch_assoc($result)){
//        echo "<h3>Employee ID :".$row["ID"]."</h3>";
//        echo "<h3>Employee Name :".$row["NAME"]."</h3>";
//        echo "<h3>Department Id :".$row["DEP_ID"]."</h3>";
//
//    }
    ?>
<?php include ('footer.inc')?>


</body>
</html>