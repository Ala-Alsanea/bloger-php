<?php include "../!_control/DB-config.php" ?>

<?php 


?>


<div class="container mt-4 text-primary">
    <form  method="post" action="post.php" class="text-center text-dark border rounded border-2 bg-light">
        <h3 class="text-capitalize fs-3 fw-bold text-center text-primary mb-1" style="margin: 12px;">
          add post  
        </h3>
        
        <!-- title filed -->
        <div class=" px-5 mx-5 ">
          <div style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
            <input class="form-control text-dark  " type="text" name="title" placeholder="Add Title" required minlength="3" maxlength="101" autofocus />
        </div>
        
        <!-- img filed -->
        <div class="px-5 mx-5 " style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
          <input class=" text-dark form-control " type="file" name="img" accept="image/*" />
        </div>
        
        <!-- Paragraph filed -->
        <article style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
          <textarea class="form-control text-dark" name="Paragraph" placeholder="Add Paragraph" minlength="3" maxlength="501" required></textarea>
          <!-- <div class="input-group">
          <span class="input-group-text">With textarea</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
          </div> -->
        </article>
        
        <!-- tags filed -->
        <div style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
            <select class="form-select text-dark" name="cat" required>
                <option value="12" selected>This is item 1</option>
                <option value="13">This is item 2</option>
                <option value="14">This is item 3</option>
            </select>
        </div>

        <!-- btn  -->
        <aside class="text-center" style="padding-top: 10px;padding-right: 30px;padding-bottom: 10px;padding-left: 30px;">
          <button class="btn btn-success btn-lg text-center link-light" type="submit">Publish</button>
        </aside>

      </div>
    </form>
</div>

<?php mysqli_close($conn) ?>