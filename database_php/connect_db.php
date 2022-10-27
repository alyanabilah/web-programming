<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproDB";

///////////////////// MYSQL Procedural //////////////////////////////

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}
//echo "Connected Successfully . (MYSQLi Procedural) <br><br>";


// ///////////////////// MYSQL Object Oriented //////////////////////////////

// //create connection
// $conn = new mysqli($servername, $username, $password);

// //check connection
// if($conn->connect_error) {
//     die ("Connection failed: " . $conn->connect_error);
// }
// echo "Connected Successfully . (MYSQLi Object Oriented) <br><br>";


// ///////////////////// PHP Data Object //////////////////////////////

// //create connection
// $conn = new mysqli($servername, $username, $password);

// //check connection
// try {
//     $conn = new PDO("mysql:host=$servername; dbname=myDB", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully . (MYSQLi PHP Data Object) <br><br>";
//   } catch(PDOException $e) {
//     echo "Connection Failed (PHP Object Oriented". $e->getMessage();
//   }
  
//   $conn = null;
//
?>
