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

        $a = (object) '5 BENI';
        $b = (object) 5;
        $c = (object) 4.1;
        $d = (object) true;
        $g = (object) null;
        $h = (object) fopen("php_practice.php", "r");
        
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($g);
        echo "<br>";
        var_dump($h);
        echo "<br>";

        unset($a);

    ?>
    
</body>
</html>
