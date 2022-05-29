<?php 
 
 include "../../_shared_files/DB-config.php";

// echo $_GET['id'] ;
$id = $_GET['id'];

$deletePost="DELETE FROM `posts` WHERE `id_category`=$id";



$re_post = mysqli_query($conn,$deletePost);


if($deletePost==true)
{
  $deleteCat="DELETE FROM `categories` WHERE `id`=$id";
  $re_cat=mysqli_query($conn,$deleteCat);
  if($re_cat==true)
  {
    header("location:../index.php");
  }
else{
  header("location:../../error.php");
}

}
else{
  header("location:../../error.php");
}






?>