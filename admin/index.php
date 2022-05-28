<?php
if (isset($_COOKIE['user'])) {
    header('location: Secure.php');
}
include 'conn.php';

$Uname = $pass = '';
$errors = array();

if (isset($_POST['submit'])) {
    // Check if username is empty
    if (empty(trim($_POST['Uname']))) {
        $errors[] = 'Please enter username.';
    } else {
        $Uname = mysqli_real_escape_string($con, $_POST['Uname']);
    }
    // Check if password is empty
    if (empty(trim($_POST['pass']))) {
        $errors[] = 'Please enter your password.';
    } else {
        $pass = sha1($_POST["pass"]);
    }
    if (empty($errors)) {
        $query = "SELECT UserName , Password  FROM `users` WHERE `UserName`= '$Uname' AND `Password` = '$pass' ";
        $result = mysqli_query($con, $query) or die('There is an error');
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            setcookie('user', $Uname, time() + 86400, '/');
            header('location: Secure.php');
        } else {
            $errors['both'] = "Your Username or Password is invalid";
        }
    } else {
        foreach ($errors as $msg) {
            echo "<p class='text-danger'>$msg</p>";
        }
    }
}
?>
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
        <div class="container bg-primary">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="text-center" style="color: var(--bs-white);"><i
                            class="fas fa-blog fs-4 text-start text-primary bg-white border rounded-circle"></i>&nbsp;Blogger
                    </h2>
                    <p class="w-lg-50" style="background: var(--bs-white);"><br>&nbsp;Today a reader, tomorrow a
                        leader.<br>Welcome to our Blogger .Login and Enjoy your time.<br><br></p>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-person">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                    </path>
                                </svg></div>
                            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                                <label for="Uname" class="form-label">User Name:</label>
                                <div class="input-group">
                                    <input name="Uname" type="text" id="Uname" class="form-control"" />
                                </div>

                                <label for=" pass" class="mt-2 form-label">Password:</label>
                                    <div class="input-group">
                                        <input name="pass" type="password" id="pass" class="form-control" value="" />
                                    </div>
                                    <div class="mt-4 mb-2 shadow text-center">
                                        <button type="submit" name="submit" value="submit"
                                            class="btn btn-primary w-100">Login</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: Login Form Basic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>