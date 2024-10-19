<?php
require_once __DIR__ .'\..\db\database.php';
include __DIR__ .'\..\db\acentos.php';
$u = new Site("portal_literario","localhost","root","");

 if (isset($_POST['save_cat'])) {

   $legenda = $_POST['nome_cat'];
   $arquivo = $_FILES['img_cat'];
   $res_ar = $res_up['cat_img'];
   $id_udp = $_GET["id_up"];
   $local = getcwd() . "\..\img\cat" . DIRECTORY_SEPARATOR;
   $temp = $arquivo['tmp_name'];
   $searchString = " ";
   $replaceString = "";
   $tamanho = 400000;
   $ext = explode('.' , $res_ar);
   $name_e = strtolower($legenda . '.' . $ext[1]);
   $new_a = remove_acentos($name_e);
   $new_name = str_replace($searchString , $replaceString , $new_a);
   $cam_f = getcwd() . "\..\img\cat" . DIRECTORY_SEPARATOR . $res_ar;
   $alt_nf = getcwd() . "\..\img\cat" . DIRECTORY_SEPARATOR . $new_name;
   $arq_cat =  $local . $new_name;

   if (empty($arquivo['name'])) {

          rename($cam_f, $alt_nf);
          $u->atualizar_categorias($id_udp, $new_name, $legenda);
          header("location: sistema.php");

        }else {

          if (!empty($legenda)) {
            if ($arquivo['size'] < $tamanho) {
              if (preg_match('/^(image)\/(jpeg|png)$/', $arquivo['type'])) {
                  $del_img = getcwd() . "\..\img\cat" . DIRECTORY_SEPARATOR . $res_ar;
                  unlink($del_img);
                  move_uploaded_file($temp, $arq_cat);
                  $u->atualizar_categorias($id_udp, $new_name, $legenda);
                  header("location: sistema.php");
              }
            }else {
              echo "Arquivo muito Grande";
            }
          }else {
            echo "Digite a legenda";
          }
        }
}

?>
