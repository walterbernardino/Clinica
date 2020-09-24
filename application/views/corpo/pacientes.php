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
  <div class="modal fade bd-example-modal-xl" id="modal-cadastro-paciente" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro de pacientes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form class="form-cadastro-paciente" id="cad_paciente">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputnome">Nome</label>
                <input type="text" class="form-control" name="nome" id="inputnome" placeholder="Nome" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputemail">Email</label>
                <input type="email" class="form-control" name="email" id="inputemail" placeholder="Email" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" name="logradouro" placeholder="Rua dos Bobos, nº 0" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Telefone</label>
                <input type="texte" class="form-control" name="telefone" id="inputAddress2" placeholder="(00)00000-0000" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputCity">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="inputCity" required>
              </div>
              <div class="form-group col-md-3">
                <label for="inputCpf">Cpf</label>
                <input type="text" class="form-control" id="inputCpf" name="cpf" required>
              </div>
              <div class="form-group col-md-2">
                <label for="inputEstado">Complemento</label>
                <select id="inputEstado" class="form-control" name="complemento" required>
                  <option selected></option>
                  <option>casa</option>
                  <option>Apartamento</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="inputSexo">Sexo</label>
                <select id="inputSexo" name="sexo" class="form-control" required>
                  <option selected></option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="inputCEP">N° casa</label>
                <input type="text" class="form-control" name="numero_residencial" id="inputCEP" required >
              </div>
            </div>

            <input type="submit"  class="btn btn-primary" value="Salvar">
          </form>

        </div>
        
      </div>
    </div>
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script>

$('#modal-cadastro-paciente').on('hidden.bs.modal', function() {
  alert("OLA")
});




  let formCadastroPaciente = document.querySelector('.form-cadastro-paciente');

  formCadastroPaciente.addEventListener('submit', e => {
    e.preventDefault();

    $.LoadingOverlay('show')
    fetch('./pacientes-save', {
        method: "POST",
        body: new FormData(formCadastroPaciente)
      })
      .then(response => response.json())
      .then(response => {
        $('#modal-cadastro-paciente').modal('hide');
        $.LoadingOverlay('hide')
        if (response.sucess) {
					$.notify(response.sucess, 'success');
				} else if (response.error) {
					$.notify(response.error, 'error');
				}

        
      
      })

  })
</script>