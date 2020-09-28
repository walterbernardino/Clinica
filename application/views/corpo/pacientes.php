<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 " align="right ">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Casdastrar paciente</button>
    </div>
    <div class="card-body">
      <div class="table-responsive tabela-paciente">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>E-mail</th>
              <th>CPF</th>
              <th>Telefone</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nome</th>
              <th>E-mail</th>
              <th>CPF</th>
              <th>Telefone</th>
            </tr>
          </tfoot>
          <tbody>
          <?php foreach($pacientes as $paciente) :?>
            <tr>
                <td><?=$paciente['nome']?></td>
                <td><?=$paciente['email']?></td>
                <td><?=$paciente['cpf']?></td>
                <td><?=$paciente['telefone']?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="modal-cadastro-paciente" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
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
                <input type="text"  class="form-control " id="inputAddress" name="logradouro" placeholder="Rua dos Bobos, nº 0" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Telefone</label>
                <input type="number" class="form-control" name="telefone" id="inputAddress2" placeholder="(00)00000-0000" required>
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
            <div class="modal-footer">
            <input type="submit"  class="btn btn-primary" value="Salvar">
            </div>
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
          $.LoadingOverlay('show')
          $('.tabela-paciente').load('index.php/Controller_paciente/tabela_pacientes', function() {
            $.LoadingOverlay('hide')
          });
					$.notify(response.sucess, 'success');
				} else if (response.error) {
					$.notify(response.error, 'error');
				}
      
      })

  })

  $(document).ready(function (){
    $('.modal').each(function (){
        $(this).on('hidden.bs.modal', function () {
          $.LoadingOverlay('show')
          $(".form-cadastro-paciente").closest('form').find("input[type=text], textarea").val("");
          $(".form-cadastro-paciente").closest('form').find("input[type=radio], input[type=checkbox]").prop('checked', false);
          $('.tabela-paciente').load('index.php/Controller_paciente/tabela_pacientes', function() {
            $.LoadingOverlay('hide')
          });
        });
    });
});



</script>