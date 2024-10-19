<?php

Class Site {

      private $pdo;
      public function __construct($dbname,$host,$user,$senha){

        try {

            $this->pdo = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
            }
        catch (PDOException $e) {
          echo "ERRO COM BANCO DE DADOS: ".$e->getMessage();
              }
        }



##################           ##################
################## CATEGORIA ##################
##################           ##################

######### Sistema / Categoria #############

  public function cadastro_categoria($cat_img,$cat_name){

    $cmd_cat_in = $this->pdo->prepare("SELECT id_categoria FROM tb_categoria WHERE cat_name = :cn");
    $cmd_cat_in->bindValue(":cn",$cat_name);
    $cmd_cat_in->execute();
    if ($cmd_cat_in->rowCount() > 0) {
      return false;
    }else {
      $cmd_cat_in = $this->pdo->prepare("INSERT INTO `tb_categoria`(`cat_img`, `cat_name`) VALUES (:ci,:cn)");
      $cmd_cat_in->bindvalue(":ci", $cat_img);
      $cmd_cat_in->bindvalue(":cn", $cat_name);
      $cmd_cat_in->execute();
      return true;
    }
  }

######### Lista Categoria ##############

public function bucar_categoria(){
  $res_cat= array();
  $cmd_cat= $this->pdo->query("SELECT * FROM tb_categoria ORDER BY cat_name");
  $res_cat = $cmd_cat->fetchAll(PDO::FETCH_ASSOC);
  return $res_cat;
}


######### Buscar Categoria por id ##############

public function buscar_dados_categoria($id){
  $res = array();
  $cmd_cat_b = $this->pdo->prepare("SELECT * FROM tb_categoria WHERE id_categoria = :id");
  $cmd_cat_b->bindValue(":id",$id);
  $cmd_cat_b->execute();
  $res = $cmd_cat_b->fetch(PDO::FETCH_ASSOC);
  return $res;

}


########## Deletar Categoria ##############

public function deletar_categoria($id_categoria){

  $cmd_cat = $this->pdo->prepare("DELETE FROM tb_categoria WHERE id_categoria = :id");
  $cmd_cat->bindValue(":id",$id_categoria);
  $cmd_cat->execute();

}

########## Atualizar Categoria ##############

public function atualizar_categorias($id_categoria, $cat_img_up, $cat_name_up){

  $cmd_cat_up = $this->pdo->prepare("UPDATE tb_categoria SET cat_img = :ci, cat_name = :cn WHERE id_categoria = :id");
  $cmd_cat_up->bindValue(":id", $id_categoria);
  $cmd_cat_up->bindValue(":ci", $cat_img_up);
  $cmd_cat_up->bindValue(":cn", $cat_name_up);
  $cmd_cat_up->execute();
  return true;

}

##################              ##################
################## Cadastro ADM ##################
##################              ##################

########## Cadastrar Administradores #############

public function cadastro_administrador($cad_m,$cad_s,$cad_ma,$cad_c,$cad_p){

  $cmd_cad_in = $this->pdo->prepare("SELECT id_ad FROM tb_ad WHERE mail = :cm");
  $cmd_cad_in->bindValue(":cm",$cad_ma);
  $cmd_cad_in->execute();
  if ($cmd_cad_in->rowCount() > 0) {
    return false;
  }else {
    $cmd_cad_in = $this->pdo->prepare("INSERT INTO `tb_ad`( `nome`, `sobrenome`, `mail`, `cpf`, `pass`) VALUES (:n,:cs,:cm,:c,:cp)");
    $cmd_cad_in->bindvalue(":n", $cad_m);
    $cmd_cad_in->bindvalue(":cs", $cad_s);
    $cmd_cad_in->bindvalue(":cm", $cad_ma);
    $cmd_cad_in->bindvalue(":c", $cad_c);
    $cmd_cad_in->bindvalue(":cp", $cad_p);
    $cmd_cad_in->execute();
    return true;
  }
}

######### Lista Administradores ##############

public function bucar_adm(){
  $res_cad= array();
  $cmd_cad= $this->pdo->query("SELECT * FROM tb_ad ORDER BY nome");
  $res_cad = $cmd_cad->fetchAll(PDO::FETCH_ASSOC);
  return $res_cad;
}

########## Deletar Administradores ##############

public function deletar_ad($id_ad){

  $cmd_ad = $this->pdo->prepare("DELETE FROM tb_ad WHERE id_ad = :id");
  $cmd_ad->bindValue(":id",$id_ad);
  $cmd_ad->execute();

}

########## Atualizar Administradores ##############


public function atualizar_administradores($id_ad,$cad_m,$cad_s,$cad_ma,$cad_c,$cad_p){

  $cmd_ad_up = $this->pdo->prepare("UPDATE tb_ad SET nome = :cm, sobrenome = :cs, mail = :cma, cpf = :c, pass = :cp WHERE id_ad = :id");
  $cmd_ad_up->bindValue(":id", $id_ad);
  $cmd_ad_up->bindValue(":cm", $cad_m);
  $cmd_ad_up->bindValue(":cs", $cad_s);
  $cmd_ad_up->bindValue(":cma", $cad_ma);
  $cmd_ad_up->bindValue(":c", $cad_c);
  $cmd_ad_up->bindValue(":cp", $cad_p);

  $cmd_ad_up->execute();
  return true;

}

########## Atualizar Administradores ##############


public function buscar_dados_adm($id){
  $res = array();
  $cmd_ad_b = $this->pdo->prepare("SELECT * FROM tb_ad WHERE id_ad = :id");
  $cmd_ad_b->bindValue(":id",$id);
  $cmd_ad_b->execute();
  $res = $cmd_ad_b->fetch(PDO::FETCH_ASSOC);
  return $res;

}

##################                          ##################
################## Descrição da PLataforma  ##################
##################                          ##################

public function busca_desc(){

    $res_desc= array();
    $cmd_desc= $this->pdo->query("SELECT descricao FROM tb_descricao WHERE id_desc = 1");
    $res_desc = $cmd_desc->fetchAll(PDO::FETCH_ASSOC);

    return $res_desc;

  }


public function alt_desc_plataforma(){

  $cmd_ad_up = $this->pdo->prepare("UPDATE tb_descricao SET descricao = :td WHERE id_desc = '1'");
  $cmd_ad_up->bindValue(":td", $desc_plat);
  $cmd_ad_up->execute();
  return true;

}

      } ##Final da Classe
  ?>
