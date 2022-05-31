<?php

include '../../_shared_files/DB-config.php';


if (isset($_POST['post_btn'])) {

  

  //save the value of the input in the php
  $cat_name = $_POST['cat_name'];
  $cat_name = trim($cat_name);
  //change html char to string
  $cat_name = htmlspecialchars($cat_name);
  $cat_name = mysqli_real_escape_string($conn, $cat_name);
  // $cat_name = 

  $insertQuery = "INSERT INTO `categories`(`category_name`) VALUES ('$cat_name')";
  $result = mysqli_query($conn, $insertQuery);

  if ($result == true)
  {
    unset($_POST['post_btn']);
    header("location:../");
    // echo'Success';
  } 
  
  else 
  {
    header('Location:../../error.php');
  }

}

else
{

}
mysqli_close($conn)
?>