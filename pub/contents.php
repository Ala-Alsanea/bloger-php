<?php

include 'admin/_shared_files/DB-config.php';

$selectQuery = " SELECT * FROM `posts` ORDER BY `created_date` DESC  ";
$re = mysqli_query($conn, $selectQuery);
$postNum = mysqli_num_rows($re);
// $posts = mysqli_fetch_assoc($re);
// var_dump( $posts);  

if ($postNum > 0) {


?>



    <section class="py-5 mt-5">
        <div class="container py-5">

            <!-- #######################(content head)######################## -->

            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <kbd class="h1 bg-dark text-capitalize rounded rounded-2 px-5 shadow "> posts </kbd>
                </div>
            </div>


            <!-- #######################(content body)######################## -->
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <?php while ($posts = mysqli_fetch_assoc($re)) {
                    $catRe = mysqli_query($conn, "SELECT * FROM `categories` WHERE `id`= $posts[id_category]");
                    $cat = mysqli_fetch_assoc($catRe);

                ?>

                    <div class="col mb-4 ">
                        <a href="read.php?id=<?php echo $posts['id'] ?>">
                            <div class="fw-bolder ">
                                <img class="rounded img-fluid shadow-lg w-100 fit-cover" src="_utilities/img/<?php echo basename($posts['img_name']) ?>" style="height: 250px;" />
                                <div class="py-4">
                                    <span class="badge bg-dark mb-2 ">
                                        <i class="fas fa-tag mx-1 my-1"></i>
                                        <?php
                                        if ($cat != null)
                                            echo $cat['category_name'];
                                        else
                                            echo 'no category';
                                        ?>
                                    </span>
                                    <h4 class="fw-bold"> <?php echo substr($posts['title'], 0, 20) . '...' ?> </h4>
                                    <p class="text-muted"> <?php echo substr($posts['paragraph'], 0, 20) . '...' ?> </p>
                                    <a class="btn btn-primary shadow-lg text-capitalize rounded rounded-pill px-4" href="read.php?id=<?php echo $posts['id'] ?>">read more ...</a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>










            </div>
        </div>
    </section>


<?php
} 
else 
{
    include 'pub/noPost.php';    
}

mysqli_free_result($re);
mysqli_close($conn);

?>