<?php
require_once __DIR__ .'\..\db\database.php';
include __DIR__.'\header.php';
include __DIR__."\..\db\cadastro_adm.php";
$u = new Site("portal_literario","localhost","root","");

if (isset($_GET['anksdnapsfhalkscna9s8odya9shcxa9shc9as8yd9ashcao9sc8h'])) {
  $id_guest_categoria = addslashes($_GET['anksdnapsfhalkscna9s8odya9shcxa9shc9as8yd9ashcao9sc8h']);
  $res = $u->buscar_dados_categoria($id_guest_categoria);

}

if (isset($_GET['id_up'])) {
  $id_guest_upcat = addslashes($_GET['id_up']);
  $res_up = $u->buscar_dados_categoria($id_guest_upcat);
}

if (isset($_GET['id_up_aaroic9cafa8isf'])) {
  $id_guest_upad = addslashes($_GET['id_up_aaroic9cafa8isf']);
  $res_up_ad = $u->buscar_dados_adm($id_guest_upad);
}



 ?>



<!Inicio cadastro categoria>
  <div class="p-3 bg-secondary bg-opacity-10 border border-success-subtle border-start-0 rounded-end">
    <h5 class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ui-radios" viewBox="0 0 16 16">
  <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0m7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5M3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6m0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
</svg> Cadastro de Categoria</h5>
  </div><br>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

  <div class="row">
    <div class="col-sm border-end">
      <div class="row">
        <div class="col-sm text-center">
          <div id="preview_categoria">
            <?php if (isset($res_up)) {?>
                <img src="..\img\cat\<?php echo $res_up['cat_img'];?>" style="width: 188px; height: 249px; object-fit: cover;">
              <?php } ?>
          </div><br>
        </div>
        <div class="col-sm"><!Inicio Categoria>
          <form enctype="multipart/form-data" method="POST">
          <input type="file" class="form-control" id="fileInput_cat" name="img_cat" accept="image/*" value="<?php if (isset($res_up)) {echo $res_up['cat_img'];} ?>"><br>
          <input type="text" class="form-control" placeholder="Categoria" name= "nome_cat" value="<?php if (isset($res_up)) { echo $res_up['cat_name'];} ?>">
            <div class="row text-center">
              <div class="col"></div>
              <?php if (isset($res_up)) {?>

                <div class="col">

                  <br><button class="btn btn-danger" name="return" method="POST" >Voltar</button>

                </div>

              <?php if (isset($_POST['return'])) {
                header("location: sistema.php");
              }
            } ?>
              <div class="col">
                <br><button class="btn btn-danger"  name="save_cat" type="submit"><?php if (isset($res_up)) {

                    echo "Atualizar";
                    include __DIR__."\..\db\update_categoria.php";

                 }else {
                    echo "Enviar";
                    include __DIR__."\..\db\cadastro_categoria.php";

                   } ?></button>

              </div>
              <div class="col"></div>

            </form>
          </div><!Fim Categoria>
            <br>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <section>
        <table class="table text-center table-responsive">
          <tr>

            <th scope="col">Imagem</th>
            <th scope="col">Categoria</th>

          </tr>
          <tr class="table-group-divider table-responsive"><! inicio lista categoria>
          <?php
          $dados_cat = $u->bucar_categoria();
            if(count($dados_cat)>0){
              for($i=0; $i < count($dados_cat); $i++){
                  echo "<tr>";
                  foreach ($dados_cat[$i] as $k => $v) {

                    if ($k != "id_categoria" and $k != "cat_img" and $k != "cat_name" and $k != "data") {
                      echo "<th>"; echo " " .$v. "</th>";
                    }
                  }
                  ?>

                    <th scope="col-sm"><img src="..\img\cat\<?php echo $dados_cat[$i]['cat_img'];?>"style="width: 50px;" ></th>
                    <th scope="col-sm" class="align-middle"><?php echo $dados_cat[$i]['cat_name'];?></th>
                    <div class="row">
                      <th scope="col-sm" class="align-middle">
                        <th><div class="bd-exemple col"><a class="btn btn-danger" href="sistema.php?id_up=<?php echo $dados_cat[$i]['id_categoria'];?>">Editar</a>
                        <a class="btn btn-danger" href="sistema.php?anksdnapsfhalkscna9s8odya9shcxa9shc9as8yd9ashcao9sc8h=<?php echo $dados_cat[$i]['id_categoria'];?>">Excluir</a></th></div><th></th>

                      </th><! Final lista categoria>

                    </div>

                    <?php
                      if(isset($_GET['anksdnapsfhalkscna9s8odya9shcxa9shc9as8yd9ashcao9sc8h'])){
                        $id_categoria = addslashes($_GET['anksdnapsfhalkscna9s8odya9shcxa9shc9as8yd9ashcao9sc8h']);
                        $buc_img = $res['cat_img'];
                        $del_img = getcwd() .  "\..\img\cat" . DIRECTORY_SEPARATOR . $buc_img;
                        unlink($del_img);
                        $u->deletar_categoria($id_categoria);
                        header("location: sistema.php");
                        ob_enf_fluch();
                      }
                   echo "</tr>";
                 }
             }
           ?>
        </table>
      </section>
    </div>
  </div>
    </div>
    <div class="col-1"></div>
    </div>

<!Final Cadastro categoria>

<!Inicio Cadastro Usuario adm>
  <div class="p-3 bg-secondary bg-opacity-10 border border-success-subtle border-start-0 rounded-end" >
    <h5 class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
  <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z"/>
</svg> Cadastro de Administradores</h5>
  </div><br>
  <div class="row">
    <div class="col-sm">
      <div class="row">

        <form class="col-sm-4 border-end" method="post">
          <div class=""  style="margin-left: 12px;">
            <input type="text" class="form-control" placeholder="Nome" name="cad_man" required value="<?php if (isset($res_up_ad)) {echo $res_up_ad['nome']; } ?>" ><br>
            <input type="text" class="form-control" placeholder="Sobrenome" name="cad_sob" required value="<?php if (isset($res_up_ad)) {echo $res_up_ad['sobrenome']; } ?>" ><br>
            <input type="email" class="form-control" placeholder="E-mail" name="cad_mail" required value="<?php if (isset($res_up_ad)) {echo $res_up_ad['mail']; } ?>"><br>
            <input type="text" class="form-control" placeholder="CPF" name="cad_cpf" required value="<?php if (isset($res_up_ad)) {echo $res_up_ad['cpf']; } ?>"><br>
            <input type="password" class="form-control" placeholder="Senha" name="cad_pass" required value="<?php if (isset($res_up_ad)) {echo $res_up_ad['pass']; } ?>"  >
            <div class="text-center">

              <?php if (isset($res_up_ad)) {
                ?>

                <br><div class="">
                  <button class="btn btn-danger"  name="return_adm" type="submit">Voltar</button>

                    <?php
                      if (isset($_POST['return_adm'])) {
                        header('location: sistema.php');
                      }

                     ?>

                  <button class="btn btn-danger"  name="up_adm" type="submit">Atualizar</button>

                </div>

              <?php  include __DIR__."\..\db\update_adm.php";

              }else {
                ?>
                <br><button class="btn btn-danger"  name="cad_adm" type="submit">Enviar</button>
                <?php
          } ?>

            </div>
          </div>
        </form>

        <div class="col-sm"  style="margin-right: 12px;">
          <section>
            <table class="table text-center table-responsive">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">e-mail</th>
                <th scope="col">CPF</th>
              </tr>
              <tr class="table-group-divider table-responsive">
                <?php
                $dados_adm = $u->bucar_adm();
                  if(count($dados_adm)>0){
                    for($i=0; $i < count($dados_adm); $i++){
                        echo "<tr>";
                        foreach ($dados_adm[$i] as $k => $v) {

                          if ($k !="id_ad" and $k !="pass" and $k !="data") {
                            echo "<th>"; echo " " .$v. "</th>";
                        }
                      }?>
                      <div class="row">
                        <th scope="col-sm">
                            <a class="btn btn-danger" href="sistema.php?id_up_aaroic9cafa8isf=<?php echo $dados_adm[$i]['id_ad']; ?>">Editar</a>
                          <a class="btn btn-danger" href="sistema.php?AShnjcas98chasoicua9shd9ashc8a9gyta6s7a9sydy9=<?php echo $dados_adm[$i]['id_ad'];?>">Excluir</a></th></div><th></th>
                        </th>
                      </div>

                      <?php
                        if(isset($_GET['AShnjcas98chasoicua9shd9ashc8a9gyta6s7a9sydy9'])){
                          $id_ad = addslashes($_GET['AShnjcas98chasoicua9shd9ashc8a9gyta6s7a9sydy9']);
                          $u->deletar_ad($id_ad);
                          header("location: sistema.php");
                          ob_enf_fluch();
                        }
                     echo "</tr>";
                   }
               }
             ?>

            </table>
          </section>
        </div>
      </div>
    </div>
  </div>

<!Final Cadastro Usuário adm>

<!Inicio Perfil do site><br>
<div class="p-3 bg-secondary bg-opacity-10 border border-success-subtle border-start-0 rounded-end">
  <h5 class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-code" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708m-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
</svg> Perfil do site</h5>
</div><br>
<div class="row"  style="margin-left: 12px; margin-right: 12px;">
  <div class="col-sm text-secondary border-end"> <!Inicio Icone do sistema>
    <div class="text-center">
      <h5><p>Logo da Plataforma</p></h5>
    </div>
    <form enctype="multipart/form-data" method="POST">
      <div class="">

        <input type="file" class="form-control" id="fileInput_icone" accept="image/*" name="log_n"><br>

    </div>
      <div id="preview_icone" class="text-center">

        <?php include __DIR__."\..\db\logo_site.php";?>

      </div>
      <div class="text-center">
        <br><button class="btn btn-danger" name="ex_logo">Excluir</button>
        <button class="btn btn-danger" name="cad_logo">Alterar</button>

      </div>

    </form>

  </div><!Final Icone do sistema>

  <div class="col-sm text-secondary"> <!Inicio Descrição plataforma>
    <form class="" action="index.html" method="post">
      <div class="text-center">
        <h5><p>Descrição da plataforma</p></h5>
      </div>
      <div class="">
        <?php

        $consulta = $u->busca_desc();
                   
        ?>
        <textarea class="form-control" id="exempleFormControlTextarea1" name="desc_plat" rows="5" placeholder="<?php echo $consulta[0]['descricao']?>" ></textarea>


      </div>
      <div class="text-center">
        <br><a class="btn btn-danger" nome="alt_desc" method="POST">Alterar</a>
               <php 
               
               if (isset($_POST['alt_desc'])) {
                  alt_desc_plataforma()
                      }

               
               ?>
      </div>
    </form>
  </div> <!Final da descrição plataforma>

  <div class="col-sm text-secondary"> <!Inicio informações plataforma>
    <form class="" action="index.html" method="post">
      <div class="text-center">
        <h5><p>Informações da Plataforma</p></h5>
      </div>
      <div class="">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
      </div>
      <div class="text-center">
        <br><button class="btn btn-danger">Enviar</button>
      </div>
    </form>
  </div><!FInal das informações da  plataforma


</div>
<!Final do Perfil do site>

</div><br>

<script>
function handleFileSelect(event, previewId) {
           const file = event.target.files[0];
           if (file) {
               const reader = new FileReader();
               reader.onload = function(e) {
                   const img = document.createElement('img');
                   img.src = e.target.result;

                   // Definindo tamanhos diferentes para cada previewId
                   if (previewId === 'preview_categoria') {
                       img.style.width = '188px';
                       img.style.height = '249px';
                   } else if (previewId === 'preview_icone') {
                       img.style.width = '300px';
                       img.style.height = '150px';
                   }

                   img.style.objectFit = 'cover';
                   const preview = document.getElementById(previewId);
                   preview.innerHTML = '';
                   preview.appendChild(img);
               };
               reader.readAsDataURL(file);
           }
       }

       document.getElementById('fileInput_cat').addEventListener('change', function(event) {
           handleFileSelect(event, 'preview_categoria');
       });

       document.getElementById('fileInput_icone').addEventListener('change', function(event) {
           handleFileSelect(event, 'preview_icone');
       });
</script>
<?php

include __DIR__ .'\..\pages\footer.php';
 ?>
