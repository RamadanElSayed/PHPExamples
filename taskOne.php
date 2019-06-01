<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/jquery-3.4.1.js"></script>

    <title>Title</title>
</head>

<style>

</style>
<body>
<div id="basic"  data-toggle="calendar" data-month="10" data-year="2014" ></div>
<?php

echo '<div style="width:100%;height:50px;background-color:indianred">';
echo '<h1 style="text-align: center">TaskOne</h1>';
echo '</div>';
echo '<div>';
echo '<img src="images/imageone.jpg" style="width:100%;height:300px;background-color:indianred">';
echo '</div>';


echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-right:50px;float:left; background-color:indianred">';

echo "<table id='mytable' style='width:300px;background-color: #721c24; height:300px' border ='1'>";

for ($i=1 ;$i<10 ;$i++)
{
    echo"<tr>";
    for ($j=1 ;$j<10 ;$j++)
    {
        echo"<td>".($i*$j)."</td>";
    }
    echo"</tr>";
}
echo "</table>";

echo "<br/>";
echo "<br/>";
echo "<br/>";

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px;float:left;background-color:indianred">';

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px;float:left;background-color:indianred">';

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px;float:start; background-color:indianred">';



echo "<br/>";
echo "<br/>";
echo "<br/>";

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px; float:left ; background-color:indianred">';

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px;float:left; background-color:indianred">';

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px; float:left; background-color:indianred">';

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px; float:left; background-color:indianred">';

echo '<img src="images/imagetwo.jpg" style="width:300px;height:300px;margin-left:50px; float:start; background-color:indianred">';


echo '<div style="width:100%;height:50px;background-color:indianred">';
echo '<h1 style="text-align: center">COPY RIGHTS</h1>';
echo '</div>';
?>

</body>
</html>