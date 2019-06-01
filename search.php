<!doctype html>
<html>
<head>
    <title>Search for  Employee</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<style>

    #mytable{
        width: 400px;
        height: 300px;
        margin-left: 100px;

    }

    #mytable td ,tr
    {
        text-align: center;
        color: aqua;
        background-color: darkslategray;
    }


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

<h2>Search For Employee</h2>
<a href="Employee.php" class="c1">back to Employee Home</a>

<form action="search.php" method="post">

    <div class="form-group">

        <label for="txtName">Employee Name</label>
        <input type="text" name="txtName" id="txtName" class="form-control">
    </div>


    <input type="submit" value="Search" class="btn btn-primary">

</form>
<table id="mytable" class="table table-bordered table-hover table-secondary" >
    <thead>
    <tr class="btn-danger">
        <td>ID</td>
        <td>Name</td>
        <td>DEP_ID</td>

    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($_POST["txtName"])) {
        $name = $_POST["txtName"];

        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        if (!$connection){
            die("error : ".$connection);
        }
        //mysqli_select_db("test");
        $query = "select * from employee where name LIKE '%$name%'";
        $result = mysqli_query($connection , $query);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row['ID']."</td>";
            echo "<td>".$row['NAME']."</td>";
            echo "<td>".$row['DEP_ID']."</td></tr>";
        }
    }

    ?>
    </tbody>
</table>
<?php include ('footer.inc')?>

</body>
</html>