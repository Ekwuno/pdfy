<?php
function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  return $data; 
}
 
function connekt(){
  $host = "localhost";
  $user = "root";
  $pasword = "12345678";
  $database = "pdfy";
  $con = mysqli_connect($host, $user, $pasword, $database);
  if (mysqli_errno($con)) {
    die("Error");
  }else{
    return $con;
  }
}
?>