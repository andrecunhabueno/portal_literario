<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <label for="exampleDataList" class="form-label"><h5>Procurar Livro</h5></label>
      <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Buscar Leitor...">
      <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
      </datalist>
              </div><br>
    </div><br>
  <div class=" border-2 col text-center">
    <section>
      <table class="table text-center table-responsive">
        <tr>

          <th scope="col">Capa</th>
          <th scope="col">Titulo</th>
          <th scope="col">Autor</th>
          <th scope="col">Ano</th>
          <th scope="col">Categoria</th>
        </tr>
        <tr class="table-group-divider table-responsive"><! inicio linha livro>
          <th scope="col-sm"><img src=".\biblioteca\1984\capa.png" style="width: 100px;" ></th>
          <th scope="col" class="align-middle">1984</th>
          <th scope="col-sm" class="align-middle">George Orwell</th>
          <th scope="col-sm" class="align-middle">1935</th>
          <th scope="col-sm" class="align-middle">Romance Utopico</th>
          <div class="row">
            <th scope="col-sm" class="align-middle">
              <button class="btn btn-danger" id="openPopup2">Editar</button>
              <button class="btn btn-danger" id="openPopup">Excluir</button>

            </th><! Final linha livro>

          </div>
        </tr>
      </table>
    </section>
  </div>
</div>
