<?php
require_once __DIR__ .'\..\db\database.php';
include __DIR__ .'\..\db\acentos.php';
$u = new Site("portal_literario","localhost","root","");

if (isset($_POST['save_cat'])) {

  $legenda = $_POST['nome_cat'];
  $arquivo = $_FILES['img_cat'];
  $temp = $arquivo['tmp_name'];
  $arq = $arquivo['name'];
  $tamanho = 400000;
  $searchString = " ";
  $replaceString = "";
  $ext = explode('.' , $arq);
  $local = getcwd() . "\..\img\cat" . DIRECTORY_SEPARATOR;
  @$name_e = strtolower($legenda . '.' . $ext[1]);
  $new_a = remove_acentos($name_e);
  $new_name = str_replace($searchString , $replaceString , $new_a);
  $arq_cat =  $local . $new_name;
  $cat_img = addslashes($new_name);
  $cat_name = addslashes($legenda);

      if (!empty($arquivo['name']) && !empty($legenda) ) { //Identifica se o campo arquivo e legenda estão preenchidos
        if ($arquivo['size'] < $tamanho) { //verifica se o tamanho não ultrapassou o 4mb
          if (preg_match('/^(image)\/(jpeg|png)$/', $arquivo['type'])) { //verifica se a imagem é jpeg e png
            if (file_exists($arq_cat)) {
              echo "Arquivo já existe";
            }else {
          move_uploaded_file($temp, $arq_cat);

          $u->cadastro_categoria($cat_img,$cat_name);
          
          }

          }else {
            echo "Envie arquivos apenas em Jpeg e PNG";
          }
        }else {
          echo "Arquivo muito grande";
        }

      }else {
        echo "Escolha a imagem e digite a categoria";
      }
    }


  ?>
