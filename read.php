<?php
include "admin/_shared_files/DB-config.php";
include "pub/head.php";

$id = $_GET['id'];
$rePost = mysqli_query($conn, "SELECT * FROM `posts` WHERE id = $id");
$post = mysqli_fetch_assoc($rePost);

if (mysqli_num_rows($rePost) > 0) {

  if ($post['id_category'] != -1) {
    $reCat = mysqli_query($conn, "SELECT * FROM `categories` WHERE `id`= $post[id_category]");
    $tag = mysqli_fetch_assoc($reCat);
    // var_dump($tag);
    mysqli_free_result($reCat);
  } else {
    $tag['category_name'] = "no category";
    // var_dump($tag);
  }

  // var_dump($post);



?>



  <body class="" id="page-top">



    <section class="d-flex flex-column justify-content-between">
      <div class="py-5">
        <?php include "pub/nav.php"; ?>
      </div>

      <!-- ###############(content)############### -->
      <div class="text-center d-flex flex-column py-5 my-5">

        <div class="d-flex justify-content-evenly align-items-lg-center my-2">
          <h2 class="fw-bold">
            <?= $post['title'] ?>
          </h2>

          <span class="badge bg-dark fs-6 d-lg-flex align-items-lg-center py-2 px-3">
            <i class="fas fa-tag me-2"></i>
            <?= $tag['category_name'] ?>
          </span>
        </div>

        <div>
          <?php
          if ($post['img_name'] != 'pic_temp.png') {
          ?>
            <img class="rounded img-fluid shadow-lg w-50 fit-cover" src="_utilities/img/<?= basename($post['img_name']) ?>" style="height: 50rem;" />

          <?php } ?>
        </div>

        <div class="my-5 mx-5">
          <p class="lead fw-bold text-muted mt-4 mx-auto">
            <?= $post['paragraph'] ?>
          </p>
        </div>

      </div>

      <div class="mt-5">
        <?php include "admin/_shared_files/footer.php"; ?>
      </div>

    </section>



    <div class="container d-flex justify-content-end fixed-bottom mb-2">
      <a class="col-1 h3 border bg-black bg-opacity-75 text-center rounded" href="#page-top">
        <i class="fas fa-angle-up text-white"></i>
      </a>
    </div>



    <?php include "pub/js_links.php" ?>
  </body>

  </html>


<?php

  mysqli_free_result($rePost);
}

else
{
  include "pub/noPost.php";
  header("refresh:3;url=index.php");
}

mysqli_close($conn);

?>