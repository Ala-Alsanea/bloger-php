<?php
include 'admin/_shared_files/DB-config.php';

$imgSizeHe = '250px';
$imgSizeWi = '450px';



$selectQuery = " SELECT * FROM `posts` ORDER BY `created_date` DESC LIMIT 4 ";
$re = mysqli_query($conn, $selectQuery);
$postNum = mysqli_num_rows($re);
$posts = mysqli_fetch_assoc($re);
$catRe = mysqli_query($conn, "SELECT * FROM `categories` WHERE `id`= $posts[id_category]");
$cat = mysqli_fetch_assoc($catRe);
// var_dump($postNum );  
// echo basename($posts['img_name']);
if ($postNum > 0) {

?>

  <div class="carousel carousel-dark slide m-3 pt-5 " id="carouselExampleDark" data-bs-ride="carousel">

    <div class="mx-5 mt-5 mb-3 px-5">
      <kbd class="h1 bg-primary text-capitalize rounded rounded-2 px-4 shadow "> added recently </kbd>
    </div>

    <!-- #######################(btns slide)######################## -->
    <div class="carousel-indicators">
      <button class="active" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
      <?php
      $n = 1;
      while ($n  < $postNum) {
      ?>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $n; ?>"></button>
      <?php $n += 1;
      } ?>

    </div>

    <div class="carousel-inner">

      <!-- #######################(active slide)######################## -->
      <a href="read.php?id=<?php echo $posts['id'] ?>">

        <section class="carousel-item active " data-bs-interval="1000">
          <div class="container py-5 text-center">
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
              <div class="col mb-5">
                <img src="_utilities/img/<?php echo basename($posts['img_name']) ?>" class=" rounded img-fluid shadow w-100 fit-cover" style="height: <?php echo $imgSizeHe ?> " />
              </div>

              <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                <div>
                  <span class="badge bg-dark mb-2 ">
                    <i class="fas fa-tag mx-1 my-1"></i>
                    <?php
                    if ($cat != null)
                      echo $cat['category_name'];
                    else
                      echo 'no category';
                    ?>
                  </span>
                  <h2 class="fw-bold"><?php echo substr($posts['title'], 0, 20) . '...' ?></h2>
                  <p class="text-muted mb-4 h4"><?php echo substr($posts['paragraph'], 0, 30) . '...<br>' . substr($posts['paragraph'], 31, 40) ?></p>
                  <span></span>
                  <a class="btn btn-primary shadow-lg text-capitalize rounded rounded-pill px-4" href="read.php?id=<?php echo $posts['id'] ?>">read more ...</a>
                </div>
              </div>

            </div>
          </div>
        </section>
      </a>
      <!-- #######################(other slide)######################## -->
      <?php while ($posts = mysqli_fetch_assoc($re)) {
        $catRe = mysqli_query($conn, "SELECT * FROM `categories` WHERE `id`= $posts[id_category]");
        $cat = mysqli_fetch_assoc($catRe); ?>
        <a href="read.php?id=<?php echo $posts['id'] ?>">

          <section class="carousel-item ">
            <div class="container py-5 text-center">
              <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5">
                  <img src="_utilities/img/<?php echo basename($posts['img_name']) ?>" class="rounded img-fluid shadow w-100 fit-cover" style="height: <?php echo $imgSizeHe ?>; max-width: <?php echo $imgSizeWi ?>" />
                </div>

                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                  <div>
                    <span class="badge bg-dark mb-2 ">
                      <i class="fas fa-tag mx-1 my-1"></i>

                      <?php
                      if ($cat != null)
                        echo $cat['category_name'];
                      else
                        echo 'no category';
                      ?>
                    </span>
                    <h2 class="fw-bold"><?php echo substr($posts['title'], 0, 20) . '...' ?></h2>
                    <p class="text-muted mb-4 h4"><?php echo substr($posts['paragraph'], 0, 30) . '...<br>' . substr($posts['paragraph'], 31, 40) ?></p>
                    <a class="btn btn-primary shadow-lg text-capitalize rounded rounded-pill px-4" href="read.php?id=<?php echo $posts['id'] ?>">read more ...</a>
                  </div>
                </div>

              </div>
            </div>
          </section>
        </a>
      <?php } ?>


      <div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>


  </div>

<?php
}

mysqli_free_result($re);
mysqli_close($conn);

?>