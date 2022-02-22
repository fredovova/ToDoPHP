<?php
require_once 'configBD.php';
$id=$_GET['id'];
mysqli_query($mysql,query:"DELETE FROM `tasks` WHERE `tasks`.`id` = '$id'");
header('location:/');
?>