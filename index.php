<!DOCTYPE html>
<?php
session_start();

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список Дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <body>
    <div class="container">

        <h1>Список Дел </h1>
    <form action="/about.php" method="POST">
    <input type="text" name="task" id="task"  placeholder="Нужно сделать .." class="form-control">
   <p>
       <br>
     <?='<p>'. $_SESSION['error'].'</p>';  ?>
        </P>
    <button type="submit" name="sendTask" class="btn btn-success"> Отправить </button>
    </form>
   
    <?php
    require 'configBD.php';
    
    echo '<ul >';
    $query=$mysql->query('SELECT *FROM `tasks`');
    while($row=$query->fetch_object())
    {
        echo '<li><b>'.$row->tasks.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
    }

    echo '</ul>'
    ?>
 </body>
</html>