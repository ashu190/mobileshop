<?php
ob_start();
//include header.php file
include "header.php";
?>
<?php
/*banner area*/
include("template/_banner-area.php");


/*top sale */
include ("template/_top-sale.php");


/*special price*/
include("template/_special-price.php");


/*banner ads*/
include ("template/_banner-ads.php");


/*new phone*/
include ("template/_new-phone.php");


/*blog*/
include ("template/_blog.php");
?>
<?php
//include footer.php file
include "footer.php";
?>

