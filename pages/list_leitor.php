<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <label for="exampleDataList" class="form-label"><h5>Busca Leitor</h5></label>
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
          <th scope="col">Nome</th>
          <th scope="col">Sobrenome</th>
          <th scope="col">Nascimento</th>
          <th scope="col">CPF</th>
        </tr>
        <tr class="table-group-divider table-responsive">
          <th scope="col-sm">André</th>
          <th scope="col">de Oliveira Cunha Bueno</th>
          <th scope="col-sm">12/06/1985</th>
          <th scope="col-sm">340.800.558-38</th>
          <div class="row">
            <th scope="col-sm">
              <button class="btn btn-danger" id="openPopup2">Editar</button>
              <button class="btn btn-danger" id="openPopup">Excluir</button>
            </th>
          </div>
        </tr>
      </table>
    </section>
  </div>
</div>
