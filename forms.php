<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>

    <title>Title</title>
</head>

<style>
    label {
        font-size: 20px;
    }
</style>
<body>

<form action="forms.php" method="post" style="width: 600px;margin-top: 30px;margin-left: 50px">

    <div class="form-group">

        <div class="form-group">

            <label for="txtName">Employee Name</label>
            <input type="text" name="txtName" id="txtName" class="form-control">
        </div>

        <div class="form-group">

            <label for="txtAge">Employee Age</label>
            <input type="number" name="txtAge" id="txtAge" class="form-control">
        </div>


        <div class="form-group">

            <label for="txtPosition">Employee Position</label>
            <input type="text" name="txtPosition" id="txtPosition" class="form-control">
        </div>


        <div class="form-group">
            <label for="empGender">Employee Gender</label>
            <div class="btn-group btn-group-toggle" data-toggle="buttons" id="empGender">
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" value="male" autocomplete="off" checked> Male
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" value="female" autocomplete="off"> Female
                </label>
            </div>
        </div>

        <div class="form-group">

            <label for="txtSalary">Employee Salary</label>
            <input type="number" name="txtSalary" id="txtSalary" class="form-control">
        </div>

        <input type="submit" value="Save" class="btn btn-primary">
        <input type="reset" value="Cancel" class="btn btn-danger">


</form>
<?php


if (isset($_POST["txtName"]) && isset($_POST["txtPosition"]) && isset($_POST["txtSalary"]) && isset($_POST["txtAge"])) {
    //getting values
    $name = $_POST["txtName"];
    $age = $_POST["txtAge"];
    $position = $_POST["txtPosition"];
    $salary = $_POST["txtSalary"];
    $gender = $_POST["options"];


    echo "<div> Name is : $name <br/> Age is :$age <br/> Position is :$position<br/> Gender is :$gender<br/> Salary is :$salary </div>";
}
?>


</body>
</html>