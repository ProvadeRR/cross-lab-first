<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: /guest/NotAuth/form-auth.php");
}
else
{       
    include "users/infouser.php";
    if($role === 3)
        {
            header("Location: users/admin.php");
        }
        else if($role === 2)
        {
            header("Location: users/manager.php");
        }
        else if($role === 1)
        {
            header("Location: users/client.php");
        }
}
