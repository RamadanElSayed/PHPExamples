<!doctype html>
<html>
<head>
    <title>employee Query</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>

</head>
<style>

    #mytable{
        width: 600px;
        height: 400px;
        margin-left: 100px;

    }

    #mytable td ,tr
    {
        text-align: center;
        color: aqua;
        background-color: darkslategray;
    }

    .c1{
        text-decoration: none;
        margin-left: 100px;
        margin-top: 20px;
        float: left;
        margin-right: 50px;
        margin-bottom: 30px;
        font-size: 20px;
        padding: 10px;
        font-family: sans-serif;
    }

    .c2{
        text-decoration: none;
        margin-left: 50px;
        margin-top: 20px;
        margin-bottom: 30px;
        padding: 10px;
        font-size: 20px;
        font-family: sans-serif;

    }


</style>
<body>
<?php
session_start();
if ($_SESSION["status"]=="logged"){include('header.inc');}

?>
<h2>Employee Home</h2>
<h4>welcome mr <?php  echo $_SESSION["username"];?></h4>
<br>
<div class="c1" >
    <a href="NewEmployee.php" style="color: darkslategray">Insert New Employee</a>
</div>

<div class="c2">
    <a href="search.php" style="color: darkslategray">Search For Employee</a>
</div>

<table id="mytable" class="table table-bordered table-hover table-secondary" >
    <thead>
    <tr class="btn-danger">
        <td>ID</td>
        <td>Name</td>
        <td>DEP_ID</td>
        <td>Action</td>

    </tr>
    </thead>
    <tbody>
    <?php
    require 'employee.ic.inc';
    // define connection attr
//    $host = "localhost";
//    $username = "root";
//    $password = "";
    $emp1=new Employee;
    $result=$emp1->getAll();
    $dataEmp=new Employee();
    while ($row=mysqli_fetch_assoc($result))
    {
        $dataEmp ->id = $row['ID'];
        $dataEmp ->name = $row['NAME'];
        $dataEmp->age=$row['DEP_ID'];

        echo "<tr><td>".$dataEmp ->id."</td>";
        echo "<td>". $dataEmp ->name."</td>";
        echo "<td>".$dataEmp->age."</td>";
        echo "<td><a href='update.php?empid=".$dataEmp ->id."' class='btn btn-primary' style='margin-right: 5px'>Edit</a><a href='delete.php?empid=".$dataEmp ->id."' class='btn btn-danger' style='margin-right: 5px'>Delete</a><a href='detials.php?empid=".$dataEmp ->id."' class='btn btn-primary' >Details</a></td></tr>";

    }

//    $connection = mysqli_connect('localhost' ,'root' , '' , "company");
//    if (!$connection){
//        die("error : ".$connection);
//    }
//    //mysqli_select_db("test");
//    $query = "select * from employee";
//    $result = mysqli_query($connection , $query);
//    while($row = mysqli_fetch_assoc($result)){
//        echo "<tr><td>".$row['ID']."</td>";
//        echo "<td>".$row['NAME']."</td>";
//        echo "<td>".$row['DEP_ID']."</td>";
//        echo "<td><a href='update.php?empid=".$row['ID']."' class='btn btn-primary' style='margin-right: 5px'>Edit</a><a href='delete.php?empid=".$row['ID']."' class='btn btn-danger' style='margin-right: 5px'>Delete</a><a href='detials.php?empid=".$row['ID']."' class='btn btn-primary' >Details</a></td></tr>";
//    }
    ?>
    </tbody>
</table>
<?php include ('footer.inc')?>

</body>
</html>