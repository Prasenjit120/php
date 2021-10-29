<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoB the Coder</title>
</head>
<body>
    <div class="container">
        Welcome to BTC

        <?php
        echo "BoB the Coder";
        $variable1=55;
        $var2=66;
        echo "<br>";
        // arithmetic operators
        Echo $variable1 + $var2;
        echo "<br>";
        // assignment op
        $nvar = $var2;
        echo $nvar;
        $variable1 += 55;
        echo $variable1;
        echo "<br>";
         // comp op
         echo "the value of 1==4 is";
         echo var_dump(1==4);
         echo "<br>";
          
         echo "the value of 1!=4 is";
         echo var_dump(1!=4);
         echo "<br>";

         echo "the value of 1<4 is";
         echo var_dump(1<4);
         echo "<br>";

        // inc/dec opperator
        //++ --
        // logical opp( &&, || , ! , xor)
        $var3= (false || true);
        echo var_dump($var3);


        //data types
        // 1.Integer
        // 2.String
        // 3.Float
        // 4.boolean
        // 5.Array
        // 6.Object

        echo var_dump("This is a string");
        echo var_dump(97);
        ?>

        <?php 
        define('PI', 3.14);
        echo var_dump(PI);
        echo PI;

        ?>
    </div>
</body>
</html>