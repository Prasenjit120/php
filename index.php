<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection failed". mysqli_connect_error());
    }
    // echo "Success";
    $name = $_POST['name'];
    $vname = $_POST['vname'];
    $mno = $_POST['mno'];
    $dor = $_POST['dor'];
    $phone = $_POST['phone'];
    $md = $_POST['md'];
    
    $sql = "INSERT INTO `btc`.`cdetails` (`name`, `vname`, `mno`, `dor`, `phone`, `md`, `dt`) VALUES ('$name', '$vname', '$mno', '$dor', '$phone', '$md', current_timestamp());";
    //echo $sql;

    if($con->query($sql)== true){
        $insert= true;
        //echo "Successfully inserted";
    }
    else{
        echo "error: $sql <br> $con->error";
    }
    $con->close();
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoB Customs Details Submission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>BoB Customs</h1>
    </header>
    <img class="bg" src="bike2.jpg" alt="">
    <div class="container">
        <h3>Submit the following details</h3>
        <div id="form">
        <form action="index.php" method="post">
            <p>NAME</p>
            <input type="text" name="name" placeholder="Your Name">
            <P>COMPANY</P>
            <input type="text" name="vname" placeholder="Bajaj">
            <P>MODEL NUMBER</P>
            <input type="text" name="mno" placeholder="Boxer CT">
            <p>Date of registration</p>
            <input type="date" name="dor" id="dor">
            <p>Mobile Number</p>
            <input type="phone" name="phone" id="mno" placeholder="+91">
            <p>Modification Details</p>
            <textarea name="md" id="md" cols="108" rows="5"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
            <?php
                if($insert==true){
                    echo "<br><p>Submitted</p>";
                }
            ?>

        </form>
    </div>

    </div>
    <script src="index.js"></script>
</body>
</html>