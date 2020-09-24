<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pacientes</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Casdastro de pacientes</button>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Lista de pacintes</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Telefone</th>
            <!--<th>Start date</th>
            <th>Salary</th>-->
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Telefone</th>
            <!--<th>Start date</th>
            <th>Salary</th>-->
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>walter bernardino junior</td>
            <td>eu@gmail.com</td>
            <td>000.000.000-00</td>
            <td>(88)98111-1111</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de pacientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
      <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnome">Nome</label>
      <input type="text" class="form-control" id="inputnome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputemail">Email</label>
      <input type="email" class="form-control" id="inputemail" placeholder="Email">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Telefone</label>
    <input type="texte" class="form-control" id="inputAddress2" placeholder="(00)00000-0000">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCpf">Cpf</label>
      <input type="text" class="form-control" id="inputCpf">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEstado">Complemento</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>casa</option>
        <option>Apartamento</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="inputSexo">Sexo</label>
      <select id="inputSexo" class="form-control">
        <option selected></option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="inputCEP">N° casa</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->