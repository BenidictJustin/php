<!-- Hello!
<h1> Hello! </h1>
<style>
    h1 {
        color: yellow;
    }
</style>
<script>
    alert("Hello!")
</script> -->
<?php 
    // echo "<b>Hello World!</b>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello this is Me!</h1> -->
    <?php 
        // echo "Hello";

        // $color = "Red";
        // $Color = "blue";
        // // echo $color;
        // // echo $Color;

        // $color_ = 5;
        // echo $color_;

        // var_dump($color_);
        // var_dump($color);
        // var_dump(3.1);
        // var_dump(false);
        // var_dump([1,2]);

        // $x = 5; // Global
        // function test(){
        //     // $x = 10; // Local
            
        //     static $x = 10;
        //     echo $x;
        //     $x++;
        //     echo "<br>";
        // }
        // test();
        // test();
        // test();
        // test();
        // test();
        // test();
        // test();
        // echo $x;

        //ECHO & PRINT

        // echo("Hello"), ("Hello"), ("Hello");
        // echo "World!","World!";
        // print ("Hello");
        // print "World!";

        // $x = print("Hello");
        // echo $x;
        // $a = 'BENI';
        // $b = 5;
        // $c = 4.1;
        // $d = true;
        // $e = [1,2,3];
        // $f = new stdClass();
        // $g = null;
        // $h = fopen("php_practice.php", "r");

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        // // echo strlen($a);
        // $x = "Juan Cruz";
        // echo str_replace("Cruz", "Lance", $x);

        // echo trim("Hello           ");

        // var_dump (explode("u", $x));

        // echo "Hello " . "World" ;
        // $x = "Hello";
        // $y = "Love";

        // echo $x . " ". $y, "<br>";
        // echo "$x HAHA $y <br>";
        // echo "Juan \$Immortal\" Enrile";

        // echo is_int(3), "<br>";

        // echo PHP_FLOAT_MAX, "<br>";
        // echo PHP_FLOAT_MIN, "<br>";
        // echo is_float(3.1);
        // echo is_numeric("25 HAHA");

        // $a = (array) '5 BENI';
        // $b = (array) 5;
        // $c = (array) 4.1;
        // $d = (array) true;
        // $e = (array) null;
        // $f = (array) fopen("php_practice.php", "r");

        // unset($a);
        
        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";

        // echo pi();
        // echo "<br>";
        // echo(min(0,145,1414,-200));
        // echo "<br>";
        // echo(max(0,145,1414,-200));
        // echo "<br>";

        // echo sqrt(2);
        // echo round(5.4);
        // echo rand(5,20);

        // $_asd = 5;
        // define("BENIDICT", true);
        // // echo BENIDICT;
        // function test(){
        //     echo BENIDICT;
        // }
        // test();

        // $x = 5;

        // $x += 10;
        // $x %= 5;
        // echo $x;
    

        // var_dump(5 == 5);
        // var_dump(5 === "5");
        // var_dump(5 <> 7);
        // var_dump(5 !== 7);
        // echo 3 <=> 2;
        
        //pre-increment
        // $x = 5;
        // echo ++$x;
        // //post-increment
        // $y = 5;
        // echo $y++;
        // echo $y;

        //Logical
        // AND &&
        // var_dump(true && true);
        // var_dump(5==="5" && 5==5);// both true is true

        // //OR ||
        // var_dump(false || false);// at leat 1 is true
        // //XOR
        // var_dump(true xor false);// only 1 true
        // // ! REVERSE
        // var_dump(!false);

        // .
        // $x = "Hello";

        // // .= append
        // $x .= "World";
        // echo $x;

        // array operators
        // Union
        // $x = [1,2,3];
        // $y = [3=>4,5,6,7];

        // $z = $x + $y;
        // print_r($x);
        // print_r($y);
        // print_r($z);


        // //Equality or equal to
        // $x =  [1,2,3];
        // $y =  [2=>3,1=>2,0=>1];
        // echo $x == $y; // true

        // identical
        // $x =  [1,2,3];
        // $y =  [2=>3,1=>2,0=>1];
        // echo $x === $y; // false

        //Decision making statements

        //if statement

        // if(4 == "4g"){
        //     echo "same";
        // }elseif(6>5){
        //     echo "6 is greater than 5 ";
        // }
        // else{
        //     echo "not same";
        // }

        // $gender = null;
        // if($gender == "female"){echo "woman";}else{echo "mens";}
        // //condition ? if true : if false;
        // echo $gender == "female" ? "woman" : "mens";
        // $x = $gender == "female" ? "woman" : "mens";
        // echo $x;

        // $x = $gender ?? null;
        // echo $x;

        //switch

        // $color = "R";

        // switch($color){
        //     case "R":
        //         echo "Red";
        //         break;
        //     case "G":
        //         echo "Green";
        //         break;
        //     case "B":
        //         echo "Blue";
        //         break;
        //     default:
        //         echo "Invalid";
        // }
        
        //true and true
        // if(4 == "4" && 4 == 4){}

        // // at least 1 true
        // if(4 == "4" || 4 == 4){}

        // //only 1 true cannot be both
        // if(4 == "4" XOR 4 == 4){}

        //reverse
        // echo !(4==3);

        //php looping statement

        //while
        // $x = 0;
        // while ($x < 5){
        //     echo "Hello";
        //     continue;
        //     $x++;
        // }

        //do while
        // do{
        //  echo $x;
        //     $x++; 
        // }while($x < 5)

        //for
        // for($x = 0;$x<5;$x++){
        //     echo $x;
        // }

        //for each
        // $x = array(1,2,3,4);
        // foreach($x as $key =>$value){
        //     echo $key. "->" . $value, "<br>";
        // }

        
    ?>
    <ol>
        <!-- <?php for($x = 1; $x<=10;$x++){
            echo "<li>Item $x</li>";
        }
        ?> -->
         

         <?php 
         $x = array("Maria", "Theresa", "Juana");
            foreach($x as $value){
                echo "<li> $value</li>";
            }
         
         ?>
    </ol>

</body>
</html>