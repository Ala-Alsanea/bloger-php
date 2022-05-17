<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloger";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

/* ini_set('memory_limit', '-1'); */

// Check connection
if (!$conn) {
  die("<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
  <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  <span>
  <strong>Error</strong> mysqli_connect_error() 
  </span>
  </div>");
}
// echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
// <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
// <span>
// <strong>Alert</strong> Connected successfully</span>
// </div>"; 

?>