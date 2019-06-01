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
label{
    font-size: x-large;
}
    #leftControls {

        width: 500px;
        height: 700px;
        border: 1px solid black;
        margin-right: 30px;
        margin-left: 50px;
        float: left;
        padding: 10px;

    }
    #rightPic {

        width: 500px;
        height: 700px;
        border: 1px solid black;
        margin-right: 60px;
        float: right;

    }
</style>
<body>

<?php

$bgImage="images/imagetwo.jpg";
$mywidth="700px";
$height="700px";
$mytext="No changed yet";
?>
<h2>welcome to Image Editor</h2>

<div id="leftControls">
    <h4>Picture Variables :</h4>
    <form action="imagework.php" method="post" style="width: 400px;margin-top: 30px;margin-left: 50px">

        <div class="form-group">
            <label for="txtText">Text over the picture</label>
            <input type="text" name="txtText" class="form-control">
        </div>

        <div class="form-group">
            <label for="txtWidth">Width</label>
            <input type="number" name="txtWidth" class="form-control">
        </div>

        <div class="form-group">
            <label for="txtHeight">Height</label>
            <input type="number" name="txtHeight" class="form-control">
        </div>

        <div class="form-group">
            <label for="ddImges">Background Image</label>
            <select name="ddImges" id="ddImges" class="form-control">
                <option value="images/imagetwo.jpg">Background 1 </option>
                <option value="images/imagetwo.jpg">Background 2 </option>
                <option value="images/imagetwo.jpg">Background 3 </option>
                <option value="images/imagetwo.jpg">Background 4 </option>
                <option value="images/imagetwo.jpg">Background 5 </option>
                <option value="images/imagetwo.jpg">Background 6 </option>
                <option value="images/imagetwo.jpg">Background 7 </option>
                <option value="images/imagetwo.jpg">Background 8 </option>

            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Apply">
        <input type="reset" class="btn btn-primary" value="reset">

    </form>

    <?php



    if(isset($_POST["ddImges"]) &&isset($_POST["txtText"])&&isset($_POST["txtWidth"])&&isset($_POST["txtHeight"]))
    {
        $bgImage=$_POST["ddImges"];
        $mytext=$_POST["txtText"];
        $mywidth=$_POST["txtWidth"]."px";
        $myheight=$_POST["txtHeight"]."px";
    }

    ?>
</div>

<div id="rightPic" style="background-image: url(<?php echo "$bgImage" ?>);width: <?php echo "$mywidth" ?>;height: <?php echo "$myheight" ?>">
    <div style="text-align: center ;margin: auto auto;margin-top: 50%;">
        <span style="margin: auto auto;margin-top: 50%;"><?php echo "$mytext" ?></span>
    </div>


</div>


</body>
</html>
</html>