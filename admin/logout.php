<?php
unset($_COOKIE);
setcookie('user',NULL,time()-86400,'/');
header('Location: Secure.php');
?>