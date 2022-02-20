<?php
$task=$_POST['task']; 
if($task==''){
    echo "Введите само задание ";
    exit();
}

require 'configBD.php';
  $mysql->query("INSERT INTO `tasks`(`tasks`)
  VALUES('$task')");

  $mysql->close();
header('location: /');
?>