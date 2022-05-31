
<?php


 ?>


<?php 
    // include DB config file
    include "../_shared_files/DB-config.php" ; 

    // sql query
    $selectQuery=" SELECT * FROM `categories` ORDER BY `id`  DESC ";

    // do query and get results

    $result=mysqli_query($conn,$selectQuery);

   
    // convert result to associative array

     $cats = mysqli_fetch_all($result,MYSQLI_ASSOC);

    // delete results from memory
    mysqli_free_result($result);

    //  var_dump($cats);

    

    

    

        
    
    

?>

<div class="table-responsive">
    <?php
    
    if(count($cats) > 0)
            {
                 ?>
    <table class="table  table-hover text-dark">
        <thead>
            <tr>
                <th class="text-uppercase visually-hidden">ID</th>
                <th class="text-uppercase text-center">Category Name</th>
                <th class="text-uppercase  text-primary text-center ">control</th>
            </tr>
        </thead>

        <tbody>
          <?php 
            
               foreach($cats as $cat){

               
      
                    
          ?>
            <form method="get" action="" class="m-4">
              <tr>
                  <!-- #########(id)########### -->
                    <td class="text-break text-capitalize visually-hidden">
                        <input type="text" name="id" readonly 
                        class="form-control-plaintext"  
                        value="<?= trim($cat['id']) ; ?>"> 
                    </td>
                    
                  <!-- #########(title)########### -->
                    <td class="text-break text-capitalize text-center fs-4" >   
                        <?= $cat['category_name']; ?>
                    </td>
                  
                  
                    <!-- #########( btns )########### -->
                    <td class="text-capitalize text-center py-4">
                        <div class="btn-group" role="group">
                        <!-- <a class="btn btn-primary" href=''> update </a> -->
                            <a class="btn btn-danger" href='javascript: delUser(<?= $cat["id"] ?>)'> Delete </a>
                        </div>
                    </td> 

              </tr>
            </form>
          <?php  }
          ?>
        </tbody>

        <tfoot>
            <tr>
                <th class="text-uppercase visually-hidden">ID</th>
                <th class="text-uppercase text-center">Category Name</th>
                <th class="text-uppercase  text-primary text-center ">control</th>
            </tr>
        </tfoot>
    </table>

    <?php 
            
            }
        
        else 
            {
                echo "<div class=\"alert alert-secondary text-center text-lg alert-dismissible\" role=\"alert\">
                     <strong class=\" text-block \">No categories found</strong> 
                     
                </div>";
            }
        
    
    ?>
</div>


<script>
    function delUser(id)
    {
        if(confirm('This category is releated to the post! If you delete this category it will be delete the post!!?'))
        {
            window.location.href ='content/delete_category.php?id='+id;
        }
    }


</script>

<?php 
    
mysqli_close($conn);

?>

