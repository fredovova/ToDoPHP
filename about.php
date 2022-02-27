<?php
session_start();

unset($_SESSION['task']);
unset($_SESSION['error']);
$task=$_POST['task'] ;
$_SESSION['task']=$task;
$_SESSION['error']='';
if(strlen($task)<=1){
  $_SESSION['error']='Введите само задание ';
  header('location: /');
}

else if ((strlen($task)>=1)){
 
require 'configBD.php';
  $mysql->query("INSERT INTO `tasks`(`tasks`) VALUES('$task')");

  $mysql->close();
header('location: /');

}

?>