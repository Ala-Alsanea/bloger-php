<?php


 ?>


<?php 
    // include DB config file
    include "../!_control/DB-config.php" ; 

    // sql query
    $selectQuery=" SELECT * FROM `posts` ORDER BY created_date DESC ";
    // do query and get results

    $result=mysqli_query($conn,$selectQuery);
    // convert result to associative array

    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // delete results from memory
    mysqli_free_result($result);
    // var_dump($posts);

    if(isset($_GET['update']))
    {
        echo $_GET['id'] ;
    }

    else{


    
    

?>




<div class="table-responsive">
    <?php if(count($posts) > 0)
            {
                 ?>
    <table class="table  table-hover text-dark">
        <thead>
            <tr>
                <th class="text-uppercase ">ID</th>
                <th class="text-uppercase ">TITLE</th>
                <th class="text-uppercase text-center ">IMAGE</th>
                <th class="text-uppercase ">PARAGRAPH</th>
                <th class="text-uppercase ">category</th>
                <th class="text-uppercase ">DATE</th>
                <th class="text-uppercase  text-primary text-center ">control</th>
            </tr>
        </thead>

        <tbody>
          <?php 
            
                foreach($posts as $post)
                {
                    
          ?>
            <form method="get" action="">
              <tr>
                  <!-- #########(id)########### -->
                    <td class="text-break text-capitalize hidden">
                        <input type="text" name="id" disabled readonly 
                        class="form-control-hidden"  
                        value="<?php echo trim($post['id']) ; ?>"> 
                    </td>
                    
                  <!-- #########(title)########### -->
                    <td class="text-break text-capitalize" >   
                        <?php echo substr($post['title'],0,10)." ..."; ?>
                    </td>
                  
                    <!-- #########(img)########### -->
                    <td class="text-capitalize text-center">
                        <picture >
                            <img class="rounded img-fluid img-thumbnail" 
                            src="data:image/*;charset=utf8;base64,<?php echo base64_encode($post['img']); ?>"
                             width="100px" alt="No Image" loading="auto" />
                        </picture>
                    </td>

                  <!-- #########(paragraph)########### -->
                    <td class="text-break text-capitalize text-start">
                        <p class="text-break" style="max-width: 170px;">
                            <?php echo substr($post['paragraph'],0,10)." ..."; ?>
                        </p>
                    </td>

                  <!-- #########(category)########### -->
                    <td class="text-capitalize">
                        <?php echo $post['category_name']; ?>
                    </td>

                  <!-- #########( DATE)########### -->
                    <td class="text-break text-capitalize">
                        <?php echo date("d-m-Y", strtotime($post['created_date']) ) ; ?>
                    </td>
                  
                    <!-- #########( btns )########### -->
                    <td class="text-capitalize text-center">
                        <div class="btn-group" role="group">
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                        </div>
                    </td> 

              </tr>
            </form>
          <?php 
                } 
                     ?>
        </tbody>

        <tfoot>
            <tr>
                <th class="text-uppercase ">ID</th>
                <th class="text-uppercase ">TITLE</th>
                <th class="text-uppercase text-center ">IMAGE</th>
                <th class="text-uppercase ">PARAGRAPH</th>
                <th class="text-uppercase ">category</th>
                <th class="text-uppercase ">DATE</th>
                <th class="text-uppercase  text-primary text-center ">control</th>
            </tr>
        </tfoot>
    </table>

    <?php 
            }

        else 
            {
                echo "<div class=\"alert alert-secondary text-center text-lg alert-dismissible\" role=\"alert\">
                     <strong class=\" text-block \">No posts found</strong> 
                     
                </div>";
            }
        
    
    ?>
</div>

<?php 
    }
mysqli_close($conn) ?>
