<?php
$id=$_GET["empid"];

$id=$_GET["empid"];

$connection = mysqli_connect('localhost' ,'root' , '' , "company");
if (!$connection){
    die("error : ".$connection);
}
//mysqli_select_db("test");
$query = "delete  from employee where id =$id";
$result = mysqli_query($connection , $query);
if(!$result)
{
    die("error : ".$result);

}
header("location: Employee.php");

?>