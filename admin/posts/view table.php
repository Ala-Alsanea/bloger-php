<?php 
    $text="FdsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssFdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
   
   
   
   
    if(isset($_GET['update']))
    {
         echo "update"; 
    }

    if(isset($_GET['delete']))
    {
        
    }
    

?>

<div class="table-responsive">
    <table class="table  table-hover text-dark">
        <thead>
            <tr>
                <th class="text-uppercase text-center">ID</th>
                <th class="text-uppercase text-center">TITLE</th>
                <th class="text-uppercase text-center">IMAGE</th>
                <th class="text-uppercase text-center">PARAGRAPH</th>
                <th class="text-uppercase text-center">category</th>
                <th class="text-uppercase text-center">DATE</th>
                <th class="text-uppercase text-center text-primary">control</th>
            </tr>
        </thead>

        <tbody>
          <?php foreach(range(0,12) as $key )
            {
          ?>
            <form method="get" action="">
              <tr>
                    <td class="text-break text-capitalize">
                      id <?php ?>
                    </td>

                    <td class="text-break text-capitalize">title</td>

                    <td class="text-capitalize text-center">
                        <picture>
                            <img class="rounded img-fluid img-thumbnail" src="../../_utilities/img/pic_temp.png" width="100px" alt="pic" loading="auto" />
                        </picture>
                    </td>

                    <td class="text-break text-capitalize text-start">
                        <p class="text-break" style="max-width: 170px;">
                            <?php echo substr($text,0,20); ?>
                        </p>
                    </td>
                    <td class="text-capitalize">Cell 2</td>

                    <td class="text-break text-capitalize">Cell 2</td>

                    <td class="text-capitalize text-center">
                        <div class="btn-group" role="group">
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                        </div>
                    </td> 

              </tr>
            </form>
          <?php } ?>
        </tbody>

        <tfoot>
            <tr>
                <th class="text-uppercase text-center">ID</th>
                <th class="text-uppercase text-center">TITLE</th>
                <th class="text-uppercase text-center">IMAGE</th>
                <th class="text-uppercase text-center">PARAGRAPH</th>
                <th class="text-uppercase text-center">category</th>
                <th class="text-uppercase text-center">DATE</th>
                <th class="text-uppercase text-center text-primary">control</th>
            </tr>
        </tfoot>
    </table>
</div>