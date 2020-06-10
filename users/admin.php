<?php
session_start();
include "infouser.php";
include "$redirect";
if ($role != 3) {
    exit(header('Location: /error404/'));
}
include "../blocks/header.php";
echo $obj->Hello()['ru'];
?>
 <?php include "../blocks/footer.php"; ?>

