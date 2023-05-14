<?php 
$conn= new mysqli('localhost','root','','house_rental_db')or die("Could not connect to mysql".mysqli_error($con));

function check_username_exists($username){
  global $conn;
  $query = $conn->query("SELECT * FROM users where username ='".$username."'");
  return $query->num_rows > 0;
}
?>
