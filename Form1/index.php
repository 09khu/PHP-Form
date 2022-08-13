<?php

if(isset($_POST['name'])){


   $server = "127.0.0.1:3325";
   $username = "root";
   $password = "";
   $db = "info_form";

   $con = mysqli_connect($server, $username, $password,$db);

   if(!$con){
       die("connection to this database failed due to" . mysqli_connect_error());
   }
  // echo "Success connecting to db";

   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $Des = $_POST['Des'];
   
   $sql = "INSERT INTO `info` (`name`, `age`, `gender`, `email`, `phone`, `des`, `dd`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$Des', current_timestamp())";
   echo $sql;

   if($con->query($sql) == true)
   {
      echo "successfully inserted!!";
   }
     else{
      echo "ERROR: $sql <br> $con->error";
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
    <title>Welcome to Info-form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <div class="container">
        <h1>Welcome to Information  form</h1>
        <p>Enter you details and submit this form !!</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="Des" id="Des" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
          
        </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>