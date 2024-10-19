<?php
require_once __DIR__ .'\..\db\database.php';
$u = new Site("portal_literario","localhost","root","");

if (isset($_POST['cad_logo'])) {

  $arquivo_logo = $_FILES['log_n'];
  $n_logo = $arquivo_logo['name'];
  $a_time = $arquivo_logo['tmp_name'];
  $l_patch = explode('.', $n_logo);
  $new_logo = getcwd() . "\..\img\sistema" . DIRECTORY_SEPARATOR . 'logo' . '.' . $l_patch[1];


  if (preg_match('/^(image)\/(jpeg|png)$/',$arquivo_logo['type'])) {


      move_uploaded_file($a_time , $new_logo);


}else {
    echo "ARQUIVO NÃO ESTÁ NO FORMATO CORRETO";
  }

}elseif (isset($_POST['ex_logo'])) {

  $exc_logo = getcwd() . "\..\img\sistema" . DIRECTORY_SEPARATOR . "logo.";

  if (file_exists($exc_logo . "jpeg")) {

    unlink($exc_logo . "jpeg");

  }elseif (file_exists($exc_logo . "jpg")) {

    unlink($exc_logo . "jpg");

  }elseif (file_exists($exc_logo . "png")) {

    unlink($exc_logo . "jpg");


  }

}

 ?>
