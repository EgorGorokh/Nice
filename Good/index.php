<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task18</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="menu">


    <?php
    if (!isset($_COOKIE['user1'])) {
      ?>
              <li><a href="views/registration.php">Зарегестрироваться</a></li>
              <li><a href="views/authorization.php">Авторизоваться</a></li>
              <li><a href="views/sending.php">Отправить файлы</a></li>
   <?php  } else {  ?>
              <li><a href="exit.php">Выйти</a></li>
              <li><a href="views/sending.php">Отправить файлы</a></li>
   <?php  }
   ?>

</div>


<div class="content">
    Welcome to site Egor
</div>
<div class="bottom-content">
    Тут будет какая то инфа и тому подобное
</div>

</body>
</html>