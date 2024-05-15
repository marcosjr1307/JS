<?php
     setcookie('InfoUser-username', 0, time()-3600 , "/");
     header('Location: login.php');
?>