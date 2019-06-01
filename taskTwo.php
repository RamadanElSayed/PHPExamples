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

<?php

$tempHours=0;
$tempPrice=0;


$items = array(array("name" => "mohamed", "price" => 200, "hours" => 100),array("name" => "mohamed", "price" => 300, "hours" => 100),
    array("name" => "mahmoud", "price" => 220, "hours" => 80),
    array("name" => "ramadan", "price" => 200, "hours" => 120));



foreach ($items as $item) {
    if ($tempHours < $item['hours']) {
        $tempHours = $item['hours'];
    }
    if($tempPrice<$item['price']){
        $tempPrice = $item['price'];

}

}

echo "the highest hours is : " . $item['hours'] . "<br/>";
foreach ($items as $item) {
    if ($tempHours == $item['hours']) {

        echo '<div  style="width:100%;height:300px;margin-right:50px;float:left; background-color:#062c33">';

        echo "<h1>".$item['name']."</h1>";
        echo "<h1>".$item['price']."</h1>";
        echo "<h1>".$item['hours']."</h1>";

        echo "<hr/>";

        echo '</div>';
    }

    if ($tempPrice == $item['price']) {

        echo "the highest Price is : " . $item['price'] . "<br/>";

        echo '<div  style="width:100%;height:300px;margin-right:50px;float:left; background-color:#062c33">';

        echo "<h1>".$item['name']."</h1>";
        echo "<h1>".$item['price']."</h1>";
        echo "<h1>".$item['hours']."</h1>";

        echo "<hr/>";

        echo '</div>';
    }
}


//
//    echo "name is : ".$item['name']. "<br/>";
//    echo "name is : ".$item['color']. "<br/>";
//    echo "name is : ".$item['width']. "<br/>";
//    echo "name is : ".$item['height']. "<br/>";


    //echo "</div>";



//$employees2 = [name => 'mohamed', age => 33, salary => 6000, poistion => "manager"];
//$employees3 = [name => 'mohamed', age => 33, salary => 6000, poistion => "manager"];
//$employees4 = [name => 'mohamed', age => 33, salary => 6000, poistion => "manager"];
//$employees5 = [name => 'mohamed', age => 33, salary => 6000, poistion => "manager"];
//$emps = [$employees, $employees2, $employees3, $employees4, $employees5];


//
//    foreach ($emps as $emp) {
//        echo "name is : ".$employee['name']. "<br/>";
//        echo "name is : ".$employee['age']. "<br/>";
//        echo "name is : ".$employee['salary']. "<br/>";
//        echo "name is : ".$employee['poistion']. "<br/>";
//        echo "<hr/>";
//
//    };
?>


</body>
</html>