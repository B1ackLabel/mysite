<?php
if (isset($_POST) && !empty($_POST)){
  require_once("cfg.php");


  $msg = array();
  $nick = $_POST['nick'];
  $pwd = $_POST['password'];
  $email = $_POST['email'];
  $file = $_POST['avatar'];
  $name = $_POST['name'];


  if (empty($msg)) {
    try {
      $ex = $PDO->prepare('INSERT INTO users(`nick`,`password`,`email`,`file`, `name`, `avatar`, `reg_date`) values ( ?, ?, ?, ?, ?, ?)');
      $ex->execute([$nick, md5($pwd), $email, $file, $name, ''.date("Y-m-d H:i:s" , time()).'']);
      header('Location: index.php');
    } catch (Exception $e) {
      $e->getMessage();
    }

  }



}
?>
