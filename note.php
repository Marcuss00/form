<?php
if(isset($_POST['name'])) 
{
 $server = "localhost"; 
 $username = "root"; 
 $password = ""; 

 $con = mysqli_connect($server, $username, $password); 

 if(!$con)
 {
    die("connection failed due to".mysqli_connect_error()); 
 }

 $name =$_POST['name']; 
 $age = $_POST['age']; 
 $email = $_POST['email']; 
 $phone = $_POST['phone']; 
 $sql = "INSERT INTO `form`.`inputs`(`name`, `age`, `email`, `phone. no.`, `submission date`)
  VALUES ('$name', '$age', '$email', '$phone', current_timestamp())";

echo $sql ; 
if($con->query($sql)==true)
{
    echo "sucessfully inserted";
}
else{
    echo "Error $sql <br> $con->error";
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
    <link rel="icon" type="image/x-icon" href="note.ico">
    <title>Form</title>
</head>
<style>
    .input,.btn {
        line-height: 1.5;
        margin: 2.5px 2.5px 2.5px 2.5px;
        text-align: center;
        
    }
    #form{
        align-content: center;
    }
</style>
<body>
    <b style="margin-left: 50px;"> Fill the form</b>
    <form id="form" action="note.php" method="post">
        <input type="text" class="input" name="name" placeholder="enter name" id="name"> <br>
        <input type="text" class="input" name="age" placeholder="enter age"  id="age">  <br>
        <input type="email"  class="input" name = "email"placeholder="enter email" id="email"><br>
        <input type ="number" class="input" name="phone" placeholder="enter phone. no" id="phone"><br>
        <button class="btn">submit</button>
        <button class="btn">reset</button>
    </form>
</body>
</html>