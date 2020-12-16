<?php
if (isset($_POST) && !empty($_POST)){
require_once("cfg.php");


  $msg = array();
  $login = $_POST['login'];
  $pwd = $_POST['password'];


  if (empty($msg)) {
    try {
      $ex = $PDO->prepare('SELECT * FROM `users` WHERE `nick`= "'.$login.'" or `email`= "'.$login.'" and `password`="'.md5($pwd).'"');
      $res = $ex->execute();

      if ($res && ($result = $ex->fetchObject())) {

          session_start();
          $_SESSION['USER_DATA'] = $result;
          header('Location: index.php');
      }

    } catch (Exception $e) {
      $e->getMessage();
    }

  }



}
?>
