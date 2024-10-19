
<?php



if (isset($_POST["up_adm"])) {

  $id_ad = $_GET["id_up_aaroic9cafa8isf"];
  $cad_m = $_POST["cad_man"];
  $cad_s = $_POST["cad_sob"];
  $cad_ma = $_POST["cad_mail"];
  $cad_c = $_POST["cad_cpf"];
  $cad_p = $_POST["cad_pass"];


  $u->atualizar_administradores($id_ad, $cad_m, $cad_s, $cad_ma, $cad_c, $cad_p);
  header('location: sistema.php');
}

 ?>
