<section id="wrapper" class="flex-fill">
    <div id="content-wrapper" class="d-flex flex-column" style="background: var(--bs-body-bg);">
        
    <!-- username -->
        <div class="container text-center shadow-lg" style="background: var(--bs-body-bg);padding: 10px;margin-bottom: 80px;">
            <h1 class="fs-1 fw-normal text-success">welcome username</h1>
        </div>
    <!-- page label  -->
        <div id="content-here" class="container-fluid" style="background: var(--bs-body-bg);margin-bottom: 40px;">
            <div id="HeaderTxt" style="margin: 20px;">
                <h3 class="fs-2 fw-bold text-primary mb-5">
                    <strong>Post Management</strong>
                </h3>
            </div>

            <!-- content -->
            <nav class="mb-5">
                <div class="nav nav-pills justify-content-center " id="nav-tab" role="tablist">
                    <button class="nav-link active text-capitalize  " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        View posts</button>
                    <button class="nav-link text-capitalize " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        add post </button>   
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                 <?php include 'view table.php'?>
                </div>


                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <?php include 'add post.php'?>
                </div>
  
            </div>



        

        </div>
<?php include '../!_control/footer.html'; ?>
        
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</section>





</div>