<div class="container-sm">
  <form class="" action="index.html" method="post">
    <div class="text-center text-secondary">
      <h3><strong>Cadastro</strong></h3><br>

    </div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div class="row">
          <div class="col-sm">
            <div class="">
              <div class="input-group mb-3">
              <input type="file" class="form-control" id="fileInput" accept="image/*">
              <label class="input-group-text form-control-sm " for="inputGroupFile02">Foto</label>
              </div>
            </div>
            <br><div class="text-center" id=preview_leitor></div> <!foto>
          </div>
          <div class="col-sm">
            <div class="row">
              <div class="col-sm-4">
                <label class="text-secondary">Nome</label>

                <input class="form-control form-control-sm" type="text" placeholder="Nome" aria-label=".form-control-sm example">
              </div>
              <div class="col-sm-8">
                <label class="text-secondary">Sobrenome</label>
                <input class="form-control form-control-sm" type="text" placeholder="Sobrenome" aria-label=".form-control-sm example">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <label class="text-secondary">CPF</label>
                <input class="form-control form-control-sm" type="text" placeholder="CPF" aria-label=".form-control-sm example">

              </div>
              <div class="col">
                <label class="text-secondary">Data de Nascimento</label>
                <input class="form-control form-control-sm" type="date" placeholder="Nascimento" aria-label=".form-control-sm example">
              </div>
            </div>
            <div class="">
              <br><label class="text-secondary">E-mail</label>
              <input class="form-control form-control-sm" type="email" placeholder="E-mail" aria-label=".form-control-sm example">
            </div>
            <div class="">
              <br><label for="" class="text-secondary">Senha</label>
              <input type="password"  class="form-control form-control-sm" placeholder="********">

            </div>
            <div class="text-center">
              <br><button type="button" name="button" class="btn btn-danger">Enviar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>

    </div>


  </form>

</div>

<script>
 document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '300px';  // Definindo a largura da imagem via JavaScript
            img.style.height = '400px'; // Definindo a altura da imagem via JavaScript
            img.style.objectFit = 'cover'; // Ajusta a imagem para cobrir o espaço definido
            const preview = document.getElementById('preview_leitor');
            preview.innerHTML = ''; // Limpa a pré-visualização anterior
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
    }
});
</script>
