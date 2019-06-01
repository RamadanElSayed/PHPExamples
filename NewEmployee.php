<!doctype html>
<html>
<head>
    <title>Insert New Employee</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<style>


    body {
        padding: 10px;
    }

    form {
        width: 600px;
        padding: 20px;

    }

    label {
        font-size: 20px;
        font-family: sans-serif;
        margin-bottom: 5px;
    }
</style>
<body>
<?php include('header.inc') ?>

<h2>Insert New Employee</h2>
<a href="Employee.php" class="c1">back to Employee Home</a>

<form action="NewEmployee.php" method="post">

    <div class="form-group">

        <label for="txtName">Employee Name</label>
        <input type="text" name="txtName" id="txtName" class="form-control">
    </div>

    <div class="form-group">

        <label for="txtSalary">Salary</label>
        <input type="number" name="txtSalary" id="txtSalary" class="form-control">
    </div>
    <div class="form-group">

        <label for="departmentId">Department</label>
        <select name="departmentId" id="departmentId"  class="form-control">
            <?php
            $connection = mysqli_connect('localhost' ,'root' , '' , "company");
            if (!$connection){
                die("error : ".$connection);
            }
            $query = "select * from department";
            $result = mysqli_query($connection , $query);
            while ($row =mysqli_fetch_assoc($result))
            {
                echo "<option value='".$row[ID]."'>".$row['NAME']."</option>";
            }
            ?>
        </select>
    </div>


    <input type="submit" value="save" class="btn btn-primary">
    <input type="reset" value="cancel" class="btn btn-danger">

</form>
<?php
require 'employee.ic.inc';
if (isset($_POST["txtName"]) && isset($_POST["txtSalary"]) && isset($_POST["departmentId"])) {
    $name = $_POST["txtName"];
    $salary = $_POST["txtSalary"];
    $depId= $_POST["departmentId"];
    $myEmp=new Employee;
    $myEmp->name=$name;
    $myEmp->salary=$salary;
    $myEmp->dep_id=$depId;
    $myEmp->create();

    //projects 5 objects
    //TODO 5 OBJECTS

//    $connection = mysqli_connect('localhost', 'root', '', "company");
//    if (!$connection) {
//        die("error : " . $connection);
//    }
////mysqli_select_db("test");
//    $query = "insert into employee (name) values ('$name')";
//    $result = mysqli_query($connection, $query);
//    echo "<script>alert('data saved successfully')</script>";
//
//   // echo "<script type='text/javascript'> window.location('Employee.php')</script>"; redirect
//    header("location: Employee.php");
}
?>
<?php include('footer.inc') ?>

</body>
</html>