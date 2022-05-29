<section id="wrapper" class="flex-fill">
    <div id="content-wrapper" class="d-flex flex-column justify-content-between ">

        <!-- username -->
        <?php include '../_shared_files/username_echo.php'?>


        <!-- page label  -->
        <div id="content-here" class="container-fluid" style=" margin-bottom: 40px;">
            <div id="HeaderTxt" style="margin: 20px;">
                <h3 class="fs-2 fw-bold text-primary mb-5">
                    <strong> Posts Management </strong>
                </h3>
            </div>

            <!--#################(contents)#########################-->

            <!-- ##########(switch btns)##########-->
            <nav class="mb-5  ">
                <div class="nav nav-pills justify-content-evenly btn-group px-5" id="nav-tab" role="tablist">
                    <button class="nav-link btn btn-lg btn-graduate-primary  text-capitalize border border-primary border-2 active" id="View-posts-tab" data-bs-toggle="tab" data-bs-target="#View-posts" type="button" role="tab" aria-controls="View-posts" aria-selected="true">
                        View posts</button>

                    <button class="nav-link btn btn-lg btn-graduate-primary text-capitalize border border-primary border-2  " id="add-post-tab" data-bs-toggle="tab" data-bs-target="#add-post" type="button" role="tab" aria-controls="add-post" aria-selected="false">
                        add post </button>
                </div>
            </nav>
            <!-- ##########(tabs)##########-->
            <div class="tab-content" id="nav-tabContent">

                <!-- ##########(table)##########-->
                <div class="tab-pane fade text-black  show active" id="View-posts" role="tabpanel" aria-labelledby="View-posts-tab">
                    <?php include 'view table.php' ?>
                </div>

                <!-- ##########(form)##########-->
                <div class="tab-pane fade px-5  text-black " id="add-post" role="tabpanel" aria-labelledby="add-post-tab">
                    <?php include 'add post.php' ?>
                </div>

            </div>
        </div>

        <div class="">
            <?php include '../_shared_files/footer.php'; ?>
        </div>

    </div>


    <!-- ##########(btn-2-up)##########-->
    <div class="border rounded d-flex flex- scroll-to-top ">
        <div class="btn-group"></div>
        <a class="border rounded d-block scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    </div>

</section>





</div>