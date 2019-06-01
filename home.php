<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/jquery-3.4.1.js"></script>

    <title>Title</title>
</head>

<style>
    #mytable{
    width: 600px;
    height: 400px;

    }
    #mytable td ,tr
    {
        text-align: center;
        color: aqua;
        background-color: indigo;
    }


</style>
<body>

<!--<div id="container">-->
<!--<div class="head"></div>-->
<!--<div class="tail"><h1>Cairo</h1></div>-->
<!--<div class="head"></div>-->
<!--<div class="tail"><h1>Cairo</h1></div>-->
<!--<div class="head"></div>-->
<!--<div class="tail"><h1>Cairo</h1></div>-->
<!--<div class="head"></div>-->
<!--<div class="tail"><h1>Cairo</h1></div>-->
<!--<div class="head"></div>-->
<!--<div class="tail"><h1>Cairo</h1></div>-->
<!--<div class="head"></div>-->
<!--<div class="tail"><h1>Cairo</h1></div>-->
<!--</div>-->


<?php
//echo "this is php text <br/>";
//$name = "honda";
//$age = 55;
//
//if ($age > 30)
//    echo "you are old";
//else
//    echo "you are small ";
//
//switch ($name) {
//    case "honda":
//        echo "you have greet car";
//        break;
//    case "BMW":
//        echo "you have greet car";
//        break;
//    case "MERCEDES":
//        echo "you have greet car";
//        break;
//    default:
//        echo "you have greet car";
//        break;
//}

//$numberMonth = 1;
//$grade = 60;
//
//if ($grade >= 50 && $grade < 65)
//    echo "Accepted :) :D";
//elseif ($grade < 50)
//    echo "rejected :) :D";
//elseif ($grade>=85 && $grade <90)
//    echo "pass ya m3lm";

//    switch ($numberMonth) {
//        case 1:
//        case 2:
//        case 3:
//            echo "WINTER :) :D";
//            break;
//        case 4:
//        case 5:
//        case 6:
//
//            echo "AUTOMN :) :D";
//            break;
//        case 7:
//        case 8:
//        case 9:
//
//            echo "SUMMER";
//            break;
//
//        case 10:
//        case 11:
//        case 12:
//            echo "SPRING";
//            break;
//
//        default:
//            echo "you have greet car";
//            break;
//    }
//echo 'your name is '.$name;
//echo "your name is $name <br/> and your age is $age";



echo "<table id='mytable' border ='1'>";

for ($i=1 ;$i<10 ;$i++)
{
    echo"<tr>";
    for ($j=1 ;$j<10 ;$j++)
    {
        if($i==$j)
            break;
       //     continue;
        echo"<td>".($i*$j)."</td>";

    }
    echo"</tr>";
}
echo "</table>";

$counter=0;
while(1)
{
    echo"welcome";
    $counter++;
    if($counter==11)
        break;
}

do{

}
while(true)
?>




</body>
</html>