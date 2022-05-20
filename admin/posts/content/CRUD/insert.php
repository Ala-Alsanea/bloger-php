<?php include "../../../_shared_files/DB-config.php";
      include "../../../_shared_files/head.html";
      // var_dump($_FILES);
?>



<?php 


if(isset($_POST['post_btn']))
{
      // var_dump($_FILES);



  $title= trim(mysqli_real_escape_string($conn,$_POST['title']));
  $title = htmlspecialchars($title);
  
  $paragraph = trim(mysqli_real_escape_string($conn,$_POST['paragraph']));
  $paragraph = htmlspecialchars($paragraph);
  
  $tag_id = trim(mysqli_real_escape_string($conn,$_POST['tag_id']));
  $tag_id = htmlspecialchars($tag_id);


  $img_name = substr(trim(mysqli_real_escape_string($conn,$_FILES['img']['name'])),0,30).".".substr($_FILES['img']['type'],6);
  $img_name = htmlspecialchars($img_name);

  $img_tmp = trim($_FILES['img']['tmp_name']);

  
  $img_dir='uploaded_img/'.$img_name;
  // var_dump($img_name);
  // var_dump($img_tmp);

  if(move_uploaded_file($img_tmp,'../../uploaded_img/'.$img_name))
  {
      echo "Success img";
  }

  else
  {
    $img_dir= '../../_utilities/img/pic_temp.png';
    // die('cant move img');
  }

  $insertQuery ="INSERT INTO `posts`(`title`, `img_name`, `paragraph`,  `id_category`) VALUES ('$title','$img_dir','$paragraph',$tag_id)";

  $result=mysqli_query($conn,$insertQuery);

  if($result)
  {
    echo "success" ;
    header("refresh:0; url=../../post.php");
  }
  else 
  {
     echo mysqli_error($conn).'<br><br>'.$insertQuery ;
  }

}

else
{
  header("refresh:0; url=../../post.php");

}


?>



<?php mysqli_close($conn) ?>