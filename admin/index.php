<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blogger</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic.css">
    <link rel="stylesheet" href="assets/css/styles.css?">
</head>

<body>
    <!-- Start: Login Form Basic -->
    <section class="position-relative py-4 py-xl-5">
        <div class="container bg-primary" style="">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="text-center" style="color: var(--bs-white);"><i class="fas fa-blog fs-4 text-start text-primary bg-white border rounded-circle"></i>&nbsp;Blogger</h2>
                    <p class="w-lg-50" style="background: var(--bs-white);"><br>&nbsp;Today a reader, tomorrow a leader.<br>Welcome to our Blogger .Login and Enjoy your time.<br><br></p>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="text" name="email" placeholder="Username"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
kkkkkkkkkkk
        </div>
    </section><!-- End: Login Form Basic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php
	
   if (!isset($_POST['submit']))
   {
       printForm();
   }
   else
   {
       $con=mysql_connect('localhost','root','','classicmodels')or die('Can\'t connect to mysql server');
       $errors=array();
       $name='';
       $pass='';
       if (empty($_POST[name]))
       {
           $errors[]='You Forget to enter your name please try again.';
       }
       else
       {
       $name=mysqli_real_escape_string($con,trim($_POST[name]));
    }
    if (empty($_POST[pass]))
       {
           $errors[]='You Forget to enter your password please try again.';
       }
       else
       {
       $pass=mysqli_real_escape_string($con,trim($_POST[pass]));
    }
     if (empty($errors))
     {
         $query ="INSERT INTO login(name,password)VALUES('$name','$pass',NOW())";
         $r=@mysqli_query($con,$query);
         if($r)
         {
             echo'<h1>Thank you ! Your login done sucessfuly</h1>';
         }
         else 
         {
           echo'<h1>Yoy could not login due to a system error.</h1>' ;
           echo '<p>'.mysqli_error($con).'<br/><br/>Query:'.$query.'</p>';
     }
     if($name=='adm'&&$pass=='123456')
        {
            setcookie('login',$name,time()+86400,'/');
            header('Location:../Secure.php');
        }
        else 
        {
            echo 'Username or password is not correct!<br>';
            echo '<a herf="logincookies.php">Try Again</a>';
        }
     mysqli_close($con);
     exit();
   }
   else
   {
       echo '<h1>Error!</h1>
       <p class="error">The following errors occuerd:<br/>';
       foreach($errors as $msg)
       {
           echo "- $msg<br/>\n";
       }
       echo '</p> <p> please try again.</p><p><br/></p>';
       printForm($name,$pass);
   }
   mysqli_close($con);
   }
   function printForm($name="",$pass="")
{
?>
<?php
}
?>
</body>
</html>