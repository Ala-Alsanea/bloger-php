<?php
if (!isset($_COOKIE['user'])) {
    header('Location: index.php');
}
else
{
    header('Location: posts/');

}
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Control Panel</title>
</head>

<body>
    <p>Welcome <?= $_COOKIE['user'] ?>!</p>
    <h1>this is a secure contents!</h1>
    Do you want to exit?, click <a href="Logout.php">here</a>
</body>

</html> -->