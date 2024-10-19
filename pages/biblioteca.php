<?php
require_once __DIR__ .'\..\db\database.php';
include __DIR__.'\header.php';
include __DIR__."\..\db\cadastro_adm.php";
$u = new Site("portal_literario","localhost","root","");

 ?>

<div class="container">
 <div class="row">

 </div>

 <div class="row">
   <! Inicio da Div do grupo de card >
   <div class="col-sm">
     <div class="row row-cols-3 row-cols-md-5 g-5">
  <div class="col"> <!inicio do card>
    <div class="card" style="width: 214px">
      <img src="..\biblioteca\1984\capa.png" class="card-img-top" alt="1984">
      <div class="card-body">
        <h5 class="card-title">1984</h5>
        <p class="card-text"> George Orwell</p>
      </div>
    </div>
  </div> <!Fim do card>

  </div>
  <! Final da div do grupo de  card>
<br>

</div>

 </div>
 </div>

 <?php

 include __DIR__ .'\..\pages\footer.php';
  ?>
