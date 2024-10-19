<?php
require_once __DIR__ .'\..\db\database.php';
$u = new Site("portal_literario","localhost","root","");

if (isset($_POST['cad_adm'])) {

  $cad_m = addslashes($_POST['cad_man']);
  $cad_s = addslashes($_POST['cad_sob']);
  $cad_ma = addslashes($_POST['cad_mail']);
  $cad_c = addslashes($_POST['cad_cpf']);
  $cad_p = addslashes($_POST['cad_pass']);

  if (!empty($cad_m)) {


    $u->cadastro_administrador($cad_m,$cad_s,$cad_ma,$cad_c,$cad_p);

   }else {

     echo "Digite todos campos";
   }


}




 ?>
