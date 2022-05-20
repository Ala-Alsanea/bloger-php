<?php include "../_shared_files/DB-config.php";
      include "postForm.php";
      ?>
<?php 
ini_set('display_errors','1');
ini_set('display_startup_errors','1');




$selectQuery = "SELECT * FrOM `categories`";
$result = mysqli_query($conn, $selectQuery);
$tags =mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);


  // postForm("","","",$tags);
  
  postForm("content/CRUD/insert.php","","",$tags);

?>



<?php mysqli_close($conn) ?>