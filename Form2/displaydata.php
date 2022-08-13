<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
  <title>Display Table</title>
  <style>

 h1 {
      font-size: 3em;
    }
    
    table {
    text-align: center;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    font-size: 100%;
    border:  3px solid black;
    }
    td {
    border-collapse: collapse;
    border:  3px solid black;
    
    }
       h2 {
        text-align: center;
      }
  </style>
  </head>
  
<body>
<h1><center>Data Base Information </center></h1>
<?php 
   $server = "localhost";
   $username = "root";
   $password = "";
   $dbname = "form_info";

   $con = mysqli_connect($server, $username, $password, $dbname );
   $query = "SELECT * FROM form";


    echo ' <table border="2" cellspacing="5" cellpadding="5" >
      <tr> 

          <td><b> SNo. </b> </td> 
          <td><b> Name </b> </td> 
          <td><b> Age </b> </td> 
          <td><b> Gender</b> </td> 
          <td><b> Email </b> </td> 
          <td><b> Phone no</b> </td> 
      <td><b> Date and time</b> </td> 
      <td><b> Comments</b> </td> 
      </tr>';

if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $f1 = $row["sno"];
        $f2 = $row["name"];
        $f3 = $row["age"];
        $f4 = $row["gender"];
        $f5 = $row["email"];
        $f6 = $row["phone"]; 
        $f7 = $row["dt"];
        $f8 = $row["des"];
        echo '<tr> 
                  <td>'.$f1.  '</td> 
                  <td>'.$f2.  '</td> 
                  <td>'.$f3.  '</td> 
                  <td>'.$f4.  '</td> 
                  <td>'.$f5.  '</td> 
                  <td>'.$f6.  '</td>
                  <td>'.$f7.  '</td>
                  <td>'.$f8.  '</td>


              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>