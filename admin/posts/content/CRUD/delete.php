<?php 
 
 include "../../../_shared_files/DB-config.php";

// echo $_GET['id'] ;
$id = $_GET['id'];

$re = mysqli_query($conn,"DELETE FROM `posts` WHERE id = $id");

if($re)
  {
    // echo "post delete successfully" ;
    header("refresh:0; url=../../post.php");
  }
  else 
  {
     echo mysqli_error($conn).'<br><br>'.$insertQuery ;
  }


?>