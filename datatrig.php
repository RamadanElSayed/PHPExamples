<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>

    <title>data manipulation</title>
</head>

<style>
    label {
        font-size: 20px;
    }
</style>
<body>

<h2>kilo to mile converters</h2>


<form action="datatrig.php" method="post" style="width: 600px;margin-top: 30px;margin-left: 50px">

    <h3>Please enter value in kiloMeter</h3>
    <input type="number" class="form-control" name="txtKilo" id="txtKilo">
    <input type="submit" class="btn btn-primary" value="Calculate">
   <span style="color: #721c24"><?php
       if (isset($_POST["txtKilo"]) ) {
           $kilo=$_POST["txtKilo"];
           $mile=$kilo*1.6;
           echo "value in miles is :".$mile;
       }

       ?>
   </span>

</form>


</body>
</html>