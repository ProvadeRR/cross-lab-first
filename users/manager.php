<?php
session_start();
include "infouser.php";
include "$redirect";
if ($role == 1) {
    exit(header('Location: /error403/'));
}
include "../blocks/header.php";
echo $obj->Hello()['ru'];
?>
 <?php include "../blocks/footer.php"; ?>

