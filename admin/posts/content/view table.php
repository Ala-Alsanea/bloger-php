<?php


 ?>


<?php 
    // include DB config file
    include "../_shared_files/DB-config.php" ; 

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
        $id = $_GET['id'] ;
        $selectQuery=" SELECT * FROM `posts` WHERE id = $id ";
        $result=mysqli_query($conn,$selectQuery);
        $post = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);

        var_dump($post);


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
                <th class="text-uppercase visually-hidden">ID</th>
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
            <form method="get" action="" class="m-4">
              <tr>
                  <!-- #########(id)########### -->
                    <td class="text-break text-capitalize visually-hidden">
                        <input type="text" name="id" readonly 
                        class="form-control-plaintext"  
                        value="<?php echo trim($post['id']) ; ?>"> 
                    </td>
                    
                  <!-- #########(title)########### -->
                    <td class="text-break text-capitalize " >   
                        <?php echo substr($post['title'],0,10)." ..."; ?>
                    </td>
                  
                    <!-- #########(img)########### -->
                    <td class="text-capitalize text-center">
                        <picture >
                            <img class="rounded img-fluid img-thumbnail" 
                            src="<?php echo $post['img_name']; ?>"
                             width="100px" alt="No Image" loading="auto" />
                        </picture>
                    </td>

                  <!-- #########(paragraph)########### -->
                    <td class="text-break text-capitalize text-start">
                        <p class="text-break" >
                            <?php echo substr($post['paragraph'],0,10)." ..."; ?>
                        </p>
                    </td>

                  <!-- #########(category)########### -->
                    <td class="text-capitalize">
                        <?php

                            if($post['id_category']==-1)
                            {
                                echo "no category" ;
                            }
                            else
                            {
                                $tagSelectQuery = "SELECT * FROM `categories` where id = $post[id_category]";
                                $result = mysqli_query($conn, $tagSelectQuery);
                                $tag = mysqli_fetch_assoc($result);
                                mysqli_free_result($result);
    
                                // var_dump($tag);
                                echo $tag['category_name']; 

                            }
                        ?>
                    </td>

                  <!-- #########( DATE)########### -->
                    <td class="text-break text-capitalize">
                        <?php echo date("d-m-Y", strtotime($post['created_date']) ) ; ?>
                    </td>
                  
                    <!-- #########( btns )########### -->
                    <td class="text-capitalize text-center py-4">
                        <div class="btn-group" role="group">
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                            <a class="btn btn-danger" href='javascript: delUser(<?php echo $post["id"] ?>)'> Delete </a>
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
                <th class="text-uppercase visually-hidden">ID</th>
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


<script>
    function delUser(id)
    {
        if(confirm('Are you sure you want to delete this post !!!?'))
        {
            window.location.href ='content/CRUD/delete.php?id='+id;
        }
    }


</script>

<?php 
    }
mysqli_close($conn) ?>
