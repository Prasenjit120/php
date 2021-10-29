<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
    <style>
        *{margin:0; padding:0; box-sizing: border-box;}
        .container{
            max-width: 80%;
            background-color: grey;
            margin: auto;
            padding: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BoB Customs</h1>
        <p>This is a container</p>
        <?php
            $age=34;
            if($age>18){
                echo "You can go to the party";
            }else{echo "Sorry you can't";}
            echo "<br>";

            $lang= array("Python","C++","html","CSS","JS","Bootstrap","php","wordpress");
            echo count($lang);
            echo $lang[6];

            $a=0;
            while($a<count($lang)){
                echo "<br> You know - $lang[$a]";
                $a++;
            }
            echo "<br>";
            $a=0;
            do{
                echo "<br> You know - $lang[$a]";
                $a++;
            }while($a<count($lang));

            foreach ($lang as $value) {
                echo "<br>Gabru:";
                echo $value;
                # code...
            }

            function printg(){
                echo "<br>BoB ";
            }
            printg();
            printg();


            function printn($n){
                echo "<br>Number ";
                echo $n;
            }
            printn(45);
            printn(55);

            $str = "Who is the Gabru";
            $len= strlen($str);
            echo "<br>The length of the string is: ".$len;
            echo "<br>The no of words are ". str_word_count($str). ".Thank you";
            echo "<br>The reverse of the function is ". strrev($str);
            echo "<br> The positon of Gabru is ".strpos($str, "bru");
            echo "<br> Replace function ". str_replace("the","Mr.",$str);




        ?>
    </div>
</body>
</html>