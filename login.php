<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        #wrapper {
            width: 400px;
            height: 300px;
            border: 1px solid black;
            border-radius: 25px;
            margin: auto auto;
            margin-top: -500px;
            padding: 30px;
        }
    </style>
</head>
<body>
<?php
$message = "";
?>
<header></header>
<div class="container">
    <div id="wrapper">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="txtName">User Name</label>
                <input type="text" name="txtName" id="txtName" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtPassword">Passwprd</label>
                <input type="password" name="txtPassword" id="txtPassword" class="form-control">
            </div>
            <input type="submit" value="Login" class="btn btn-dark"> <input type="reset" value="Cancel"
                                                                            class="btn btn-dark">
        </form>

        <?php
        if (isset($_POST["txtName"]) && isset($_POST["txtPassword"])) {
            $username = $_POST["txtName"];
            $password = $_POST["txtPassword"];
            $conn = mysqli_connect('localhost', 'root', '', 'company');
            $query = "select username , password from users where username = '$username'";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows != 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($password == $row["password"]) {
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["status"] = "logged";
                        //  session_reset();
                        header("location:employee.php");
                    } else {
                        $message = "Invalid Password please try again";
                    }
                }
            } else {
                //echo "<script>alert('Invalid user name please try again ^_^');</script>";
                $message = "Invalid user name please try again ^_^";
            }
        }
        ?>
        <?php echo $message; ?>
    </div>
</div>
<footer></footer>
<script>
    $("document").ready(function () {
        $("#wrapper").animate({"marginTop": "100px"}, 2000);
    });
</script>
</body>
</html>