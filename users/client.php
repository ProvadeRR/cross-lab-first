<?php
session_start();
include "infouser.php";
include "$redirect";
include "../blocks/header.php";
echo $obj->Hello()['ru'];
?>
<?php include "../blocks/footer.php"; ?>

