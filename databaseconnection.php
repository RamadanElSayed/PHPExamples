<!doctype html>
<html>
<head>
    <title>testing database connection </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<style>
    #mytable {
        width: 600px;
        height: 400px;

    }

    #mytable td, tr {
        text-align: center;
        color: aqua;
        background-color: indigo;
    }


</style>
<body>

<table id="mytable" class="table table-bordered table-hover table-stripped">
    <thead>
    <tr class="btn-danger">
        <td>ID</td>
        <td>Name</td>
        <td>DEP_ID</td>
    </tr>
    </thead>
    <tbody>
    <?php
    // define connection attr
    $host = "localhost";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($host, $username, $password, "company");
    if (!$connection) {
        die("error : " . $connection);
    }
    //mysqli_select_db("test");
    $query = "select * from employee";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['NAME'] . "</td>";
        echo "<td>" . $row['DEP_ID'] . "</td></tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>