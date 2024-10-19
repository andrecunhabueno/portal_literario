<div class="container">
  <form class="" action="index.html" method="post">
    <div class="text-center text-secondary">
      <h3><strong>Cadastro de Livro</strong></h3><br>

    </div>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="row">
          <div class="col">
            <div class="">
              <input class="form-control form-control-sm" type="file" id="fileInput" accept="image/*">
            </div>
            <br><div class="text-center" id="preview_livro">

            </div>
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="Titulo" aria-label=".form-control-sm example"><br>
            <div class="row">
              <div class="col">
                <input class="form-control form-control-sm" type="text" placeholder="Autor" aria-label=".form-control-sm example">
              </div>
              <div class="col">
                <input class="form-control form-control-sm" type="text" placeholder="Ano" aria-label=".form-control-sm example">
              </div>
            </div>
            <div class="">
              <br><input class="form-control form-control-sm" list="datalistOptions" id="exampleDataList" placeholder="Categoria">
                <datalist id="datalistOptions">
                  <option value="Filosofia">
                  <option value="Romance">
                  <option value="Novela">
                  <option value="Poesía">
                  <option value="Drama">
                  <option value="Infantil">
                  <option value="Ficção Cientifica">
                  <option value="Terror">
                  <option value="Policial">

                </datalist>

            </div>
            <div class="">
              <br><label for="exampleFormControlTextarea1" class="form-label text-secondary"><strong>Descrição</strong></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="">
              <br><label for="exampleFormControlTextarea1" class="form-label text-secondary"><strong>Arquivo do Livro</strong></label>
              <input class="form-control form-control-sm" id="formFileSm" type="file">

            </div>
            <div class="text-center">
              <br><button type="button" name="button" class="btn btn-danger">Enviar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2"></div>

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
            img.style.width = '288px';  // Definindo a largura da imagem via JavaScript
            img.style.height = '349px'; // Definindo a altura da imagem via JavaScript
            img.style.objectFit = 'cover'; // Ajusta a imagem para cobrir o espaço definido
            const preview = document.getElementById('preview_livro');
            preview.innerHTML = ''; // Limpa a pré-visualização anterior
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
    }
});
</script>
