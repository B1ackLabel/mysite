<?session_start();?>

</div>
<div class="col">
  <div class="col2">
    <?if (!$GLOBALS['IS_AUTH']):?>
    Авторизация
    <hr>
    <form  action="auth.php" method="post">
      <input type="text" name="login" value="<?=$_POST["login"]?>" placeholder="Ваш ник или email">
      <input type="password" name="password" value="<?=$_POST["password"]?>" placeholder="Ваш пароль">
      <button class="btn ts4" type="submit" name="auth">Авторизоваться</button>
      <a class="btn ts4" style="margin: 2px 0px;" href="reg.php">Регистрация</a>
    </form>
  <? else:?>
     Добро пожаловать<hr>
     <?=$_SESSION['USER_DATA']->nick;?>
    <a class="btn ts4" href="/logout.php">Выход</a>
   <? endif; ?>
  </div>
</div>

  </div>
</div>
<footer class="footer">
    Copyright edaee.ru 2020 - <?=date(Y, time())?>
    <div style="float: right; margin-right: 20px; margin-buttom: 10px; margin-top: 0px;">
      <a class="btn topIn" href="#">TopIn</a>
    </div>
</footer>
</body>
</html>
