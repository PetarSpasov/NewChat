<?php
    include "classes.php";
    if(isset($_POST['UserPasswordLogin'])){
        $user = new user();
        $user->setUserPassword(sha1($_POST['UserPasswordLogin']));
        $user->UserLogin();
    }
?>