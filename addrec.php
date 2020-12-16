<?php
if (isset($_POST) && !empty($_POST)){
  require_once("cfg.php");
  $msg = array();
  $r_name = $_POST['r_name'];
  $text = $_POST['text'];
  $file = $_POST['image'];
  $pub_date = date("Y-m-d H:m:s" ,time());
  $user_id = '2';

  try {
    $ex = $PDO->prepare( 'INSERT INTO recipes (`name`, `text`, `image`, `pub_date`, `autor`) VALUES (?, ?, ?, ?, ?)' );
    $res = $ex->execute([$r_name, $text, $file, $pub_date, $user_id]);
    header('Location: /');
  } catch (Exception $e) {
    $e->getMessage();
  }
}

?>
