
<?php 
// include "../_shared_files/DB-config.php";



function postForm($action="",$title = "" , $paragraph ="",$tags=[])
{

?>

<div class="container mt-4 text-primary">

    <form  method="post" action="<?php echo $action ?>" class="text-center text-dark border rounded border-2 bg-light" enctype="multipart/form-data">

        <h3 class="text-capitalize fs-3 fw-bold text-center text-primary my-3" >
          add post  
        </h3>
        
        <div class=" px-5 mx-5 ">
          
          <!-- title filed -->
          <div class="m-3">

            <input class="form-control text-dark  " type="text" name="title" placeholder="Add Title" required minlength="3" maxlength="100" autofocus 
            value="<?php echo $title?>" />
        </div>
        
        <!-- img filed -->
        <div class="px-5 mx-5 " >
          <input class=" text-dark form-control " type="file" name="img" accept="image/*"  />
        </div>
        
        <!-- Paragraph filed -->
        <article class="m-3">
          <textarea class="form-control text-dark" name="paragraph" placeholder="Add Paragraph" minlength="3" maxlength="500" required value="<?php echo $paragraph?>"></textarea>
         
        </article>
        
        <!-- tags filed -->
        <div class="m-3">
            <select class="form-select text-dark" name="tag_id" required>
              <option value="-1" selected>
                select category ...
              </option>
                
                <?php foreach ($tags as $tag)
                        { ?>
                    <option value="<?php echo $tag['id']?>">
                      <?php echo $tag['category_name']?>
                    </option>
                <?php } ?>

            </select>


        </div>

        <!-- btn  -->
        <div class="text-center my-3" >
          <button class="btn btn-success btn-lg text-center link-light" type="submit" name="post_btn">Publish</button>
        </div>

      </div>
    </form>
</div>


<?php } ?>

