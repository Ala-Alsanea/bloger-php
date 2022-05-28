<?php
// include "admin/_shared_files/head.html";
include "pub/head.php";
?>


<body id="page-top">

  <section class="d-flex flex-column justify-content-between">
    <div class="">
      <?php include "pub/nav.php"; ?>
    </div>

    <div class="my-5">
      <?php include "pub/header.php"; ?>
    </div>

    <div class="">
      <?php include "pub/contents.php"; ?>
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