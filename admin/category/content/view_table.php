<?php


 ?>


<?php 
    // include DB config file
    include "../_shared_files/DB-config.php" ; 

    // sql query
    $selectQuery="  ";

    // do query and get results

    // $result=mysqli_query($conn,$selectQuery);

   
    // convert result to associative array

    // $cats = mysqli_fetch_all($result,MYSQLI_ASSOC);

    // delete results from memory
    // mysqli_free_result($result);

    // var_dump($posts);

    

    

    

        
    
    

?>

<div class="table-responsive">
    <?php
    
    // if(count($cats) > 0)
    //         {
                 ?>
    <table class="table  table-hover text-dark">
        <thead>
            <tr>
                <th class="text-uppercase visually-hidden">ID</th>
                <th class="text-uppercase ">TITLE</th>
                <th class="text-uppercase  text-primary text-center ">control</th>
            </tr>
        </thead>

        <tbody>
          <?php 
            
               
                
                    
          ?>
            <form method="get" action="" class="m-4">
              <tr>
                  <!-- #########(id)########### -->
                    <td class="text-break text-capitalize visually-hidden">
                        <input type="text" name="id" readonly 
                        class="form-control-plaintext"  
                        <!-- value="<?= trim($post['id']) ; ?>">  -->
                    </td>
                    
                  <!-- #########(title)########### -->
                    <td class="text-break text-capitalize " >   
                        <!-- <?= substr($post['title'],0,10)." ..."; ?> -->
                    </td>
                  
                  
                    <!-- #########( btns )########### -->
                    <td class="text-capitalize text-center py-4">
                        <div class="btn-group" role="group">
                        <!-- <a class="btn btn-primary" href=''> update </a> -->
                            <!-- <a class="btn btn-danger" href='javascript: delUser(<?= $post["id"] ?>)'> Delete </a> -->
                        </div>
                    </td> 

              </tr>
            </form>
          <?php  ?>
        </tbody>

        <tfoot>
            <tr>
                <th class="text-uppercase visually-hidden">ID</th>
                <th class="text-uppercase ">TITLE</th>
                <th class="text-uppercase  text-primary text-center ">control</th>
            </tr>
        </tfoot>
    </table>

    <?php 
            
            // }
        
        // else 
        //     {
        //         echo "<div class=\"alert alert-secondary text-center text-lg alert-dismissible\" role=\"alert\">
        //              <strong class=\" text-block \">No posts found</strong> 
                     
        //         </div>";
        //     }
        
    
    ?>
</div>


<script>
    function delUser(id)
    {
        if(confirm('Are you sure you want to delete this post !!!?'))
        {
            window.location.href ='content/delete_category.php?id='+id;
        }
    }


</script>

<?php 
    
mysqli_close($conn);

?>
