<?php
$title_name = 'Добавление блюда';
require_once('header.php');
?>
<div class="col1">
  Добавление блюда
  <hr>
  <form class="" action="addrec.php" method="post">
    <label for="r_name">Название блюда:</label>
    <input type="text" name="r_name" value="">
    <label for="text">Описание блюда:</label><br>
    <textarea name="text" rows="10" cols="25"></textarea><br>
    <label for="image">Выберите изображение:</label>
    <input type="file" name="image" value="">
    <br>
    <button class="btn ts4" type="submit" name="add">Добавить</button>
  </form>
</div>

<? require_once('footer.php'); ?>
