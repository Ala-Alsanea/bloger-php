<?php


 ?>


<?php 
    $text="FdsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssFdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
    include "../!_control/DB-config.php" ;  
    $selectQuery="SELECT * FROM `posts`";
    $result=mysqli_query($conn,$selectQuery);
    // $row[]=mysqli_fetch_assoc($result);
    var_dump(mysqli_fetch_assoc($result));

    if(isset($_GET['update']))
    {
        echo $_GET['img'] ;
    }


?>

<div class="table-responsive">
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
            if(true )
            {
                while($row = mysqli_fetch_assoc($result))
                {
          ?>
            <form method="get" action="">
              <tr>
                  <!-- #########(id)########### -->
                    <td class="text-break text-capitalize ">
                    <input type="text" name="img" readonly class="form-control-plaintext"  value="<?php echo $row['id'] ; ?>   "> 
                    </td>
                    
                  <!-- #########(title)########### -->
                    <td class="text-break text-capitalize" >
                        
                    <?php echo substr($row['title'],0,10)." ..."; ?>
                    </td>
                  
                    <!-- #########(img)########### -->
                    <td class="text-capitalize text-center">
                        <picture >
                       
                            <img class="rounded img-fluid img-thumbnail" src="data:image/*;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" width="100px" alt="pic" loading="auto" />
                        </picture>
                    </td>

                  <!-- #########(paragraph)########### -->
                    <td class="text-break text-capitalize text-start">
                        <p class="text-break" style="max-width: 170px;">
                            <?php echo substr($row['paragraph'],0,10)." ..."; ?>
                        </p>
                    </td>

                  <!-- #########(category)########### -->
                    <td class="text-capitalize">
                    <?php echo $row['category_id']; ?>

                    </td>

                  <!-- #########( DATE)########### -->
                    <td class="text-break text-capitalize">
                        <?php echo date("d-m-Y", strtotime($row['created_date']) ) ; ?>
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
                    } ?>
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
</div>

<?php mysqli_close($conn) ?>
