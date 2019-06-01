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

//$names = ['mohamed','ahmed','maya','sara','romio'];
//foreach ($names as $name)
//{
//    echo $name ."<br/>";
//}
//$employees = array(array("name" => "mohamed", "age" => 33, "salary" => 6000, "poistion" => "manager"),
//    array("name" => "mohamed", "age" => 33, "salary" => 6000, "poistion" => "manager"),array("name" => "mohamed", "age" => 33, "salary" => 6000, "poistion" => "manager")
//,array("name" => "mohamed", "age" => 33, "salary" => 6000, "poistion" => "manager"),
//    array("name" => "mohamed", "age" => 33, "salary" => 6000, "poistion" => "manager"));


$items = array(array("name" => "mohamed", "color" => "red", "width" => 100, "height" => 100),array("name" => "mohamed", "color" => "red", "width" => 100, "height" => 100),
    array("name" => "mohamed", "color" => "red", "width" => 100, "height" => 100),
    array("name" => "mohamed", "color" => "red", "width" => 100, "height" => 100));



foreach ($items as $item) {

    echo '<div style="width:'.$item["width"].';height:'.$item["height"].';background-color:'.$item["color"].'">';
    echo "<h1>".$item['name']."</h1>";
    echo "<hr/>";

    echo '</div>';
//
//    echo "name is : ".$item['name']. "<br/>";
//    echo "name is : ".$item['color']. "<br/>";
//    echo "name is : ".$item['width']. "<br/>";
//    echo "name is : ".$item['height']. "<br/>";


    //echo "</div>";


}
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