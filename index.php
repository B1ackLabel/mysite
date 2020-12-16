<?php
$title_name = 'Главная страница сайта Еда Есть!';
require_once('header.php');
require_once('cfg.php');

global $IS_AUTH;
$IS_AUTH = false;

if (isset($_SESSION['USER_DATA']) && !empty($_SESSION['USER_DATA'])) {
  $IS_AUTH = true;
}
if ($IS_AUTH):?>
    <a class="btn ts4" style="float: right; margin: 10px 0px;" href="/addrecepis.php">Добавить рецепт</a>
<?endif;
    $ex = $PDO->prepare('SELECT * FROM `recipes` ORDER BY `id` DESC');
    $res = $ex->execute();
    if ($res):
      while ($item = $ex->fetch(PDO::FETCH_OBJ)):
      $n = $PDO->prepare('SELECT `nick` FROM `users` WHERE `id`="'.$item->autor.'"');
      $n->execute();
      $n = $n->fetch(PDO::FETCH_OBJ);

      ?>
        <div class="col1">
          <a class="t1" href="/id=<?=$item->id?>"><?=$item->name?></a>
          <hr>
          <?=$item->text?>
          <hr>
          <?=$item->pub_date?>; <?= $n->nick; ?>
        </div>
      <? endwhile;
    else: ?>
      <div class="col1">
        Пока нет рецептов.
      </div>
    <?endif;?>


<?php
require_once('footer.php');
?>
