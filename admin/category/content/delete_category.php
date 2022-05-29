<?php 
 
 include "../../../_shared_files/DB-config.php";

// echo $_GET['id'] ;
$id = $_GET['id'];
$re = mysqli_query($conn,"SELECT `img_name` FROM `posts` WHERE id = $id");
$post = mysqli_fetch_assoc($re);

if($post['img_name']!= 'pic_temp.png')
{
  unlink('../../../../_utilities/img/'.$post['img_name']);
  // var_dump($post);
}



$re = mysqli_query($conn,"DELETE FROM `posts` WHERE id = $id");

if($re)
  {
    
    // echo "post delete successfully" ;
    header("location:../../");
  }
  else 
  {
    //  echo mysqli_error($conn).'<br><br>'.$insertQuery ;
     header("location:../../../error.php");

  }


?>