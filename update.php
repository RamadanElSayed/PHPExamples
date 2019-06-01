<!doctype html>
<html>
<head>
    <title>update Employee</title>
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
        font-style: ;
        margin-bottom: 5px;
    }
</style>
<body>
<?php include('header.inc') ?>

<h2>update Employee</h2>
<a href="Employee.php" class="c1">back to Employee Home</a>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {


    $id = $_GET["empid"];
    $connection = mysqli_connect('localhost', 'root', '', "company");
    if (!$connection) {
        die("error : " . $connection);
    }
    $name = "";
    $query = "select * from employee where id =$id";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["NAME"];
    }
}
?>

<form action="update.php" method="post">

    <div class="form-group">

        <label for="txtName">Employee Name</label>
        <input type="text" name="txtName" id="txtName" class="form-control" value="<?php echo $name ?>">
    </div>

    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
    <input type="submit" value="save" class="btn btn-primary">
    <input type="reset" value="cancel" class="btn btn-danger">

</form>

<?php
require 'employee.ic.inc';
if (isset($_POST["txtName"])) {
    $id = $_POST["id"];
    $newEmp=new Employee;
    $newEmp->name=$_POST["txtName"];
    $newEmp->update($id);
}
?>
<?php include('footer.inc') ?>

</body>
</html>