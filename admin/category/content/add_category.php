<?php include "../_shared_files/DB-config.php";
     
      ?>
<?php 


$errors= array();
if(isset($_POST['post_btn'])){
      //save the value of the input in the php
      $cat_name=$_POST['cat_name'];
      $cat_name=trim($cat_name);
      //change html char to string
      $cat_name=htmlspecialchars($cat_name);
      $cat_name= mysqli_real_escape_string($conn,$cat_name);


      $insertQuery= "INSERT INTO `categories`(`category_name`) VALUES ('$cat_name')";
      $result=mysqli_query($conn,$insertQuery);
      if($result==true){
        header('refresh:0');
        // echo'Success';
      }
else{
      header('Location:../error.php');
}

}












?>
<div class="container mt-4 text-primary">

<form  method="post" action="" class="text-center text-dark border rounded border-2 bg-light" enctype="multipart/form-data">

    <h3 class="text-capitalize fs-3 fw-bold text-center text-primary my-3" >
      add category  
    </h3>
    
    <div class=" px-5 mx-5 ">
      
      <!-- title filed -->
      <div class="m-3">

        <input class="form-control text-dark  " type="text" name="cat_name" placeholder="Add Title" required minlength="3" maxlength="20" autofocus 
        value="" />
    </div>


    </div>

    <!-- btn  -->
    <div class="text-center my-3" >
      <button class="btn btn-success btn-lg text-center link-light" type="submit" name="post_btn">Add</button>
    </div>

  </div>
</form>
</div>


<?php mysqli_close($conn) ?>