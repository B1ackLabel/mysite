<?php
$title_name = 'Регистрация на сайте';
require_once('header.php');
?>

<div class="col1">
  Регистрация
  <hr>
  <form class="" action="registration.php" method="post">
    <label for="nick">Ник он же, логин(3-15):</label>
    <input type="text" name="nick" value="<?=$_POST['nick']?>"><br>
    <label for="password">Пароль(5-25):</label>
    <input type="text" name="password" value="<?=$_POST['password']?>"><br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?=$_POST['email']?>"><br>
    <label for="avatar">Аватар(250x250): </label>
    <input type="file" name="avatar" value="<?=$_POST['avatar']?>"><br>
    <label for="nick">Ваше имя(1-25):</label>
    <input type="text" name="name" value="<?=$_POST['name']?>"><br>
    <button class="btn ts4" type="submit" name="reg">Зарегестрироваться</button>
  </form>
</div>



<?php
require_once('footer.php');
?>
