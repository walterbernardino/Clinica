<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 " align="right ">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Casdastro de clinicas</button>
    </div>
    <div class="card-body">
      <div class="table-responsive tabela-clinica">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome Clinica</th>
              <th>Endereço</th>
              <th>Cidade</th>
              <th>CNPJ</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nome Clinica</th>
              <th>Endereço</th>
              <th>Cidade</th>
              <th>CNPJ</th>
            </tr>
          </tfoot>
          <tbody>
          <?php foreach($clinica as $clinicas) :?>
            <tr>
                <td><?=$clinicas['nome_clinica']?></td>
                <td><?=$clinicas['logradouro']?></td>
                <td><?=$clinicas['cidade']?></td>
                <td><?=$clinicas['cnpj']?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

    <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="modal-cadastro-clinica" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro de Clinicas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form class="form-cadastro-clinica" id="cad_clinica">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputnome">Nome da clicinca</label>
                <input type="text" class="form-control" name="nome_clinica" id="inputnome" placeholder="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputemail">cidade</label>
                <input type="texte" class="form-control" name="cidade" id="inputemail" placeholder="" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputAddress">Endereço</label>
                <input type="text"  class="form-control " id="inputAddress" name="logradouro" placeholder="" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">cnpj</label>
                <input type="number" class="form-control" name="cnpj" id="inputAddress2" placeholder="" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputCity">numero</label>
                <input type="number" name="numero" class="form-control" id="inputCity" required>
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

<script>


let formCadastroClinica = document.querySelector('.form-cadastro-clinica');

formCadastroClinica.addEventListener('submit', e => {
    e.preventDefault();

    $.LoadingOverlay('show')
    fetch('./clinicas-save', {
        method: "POST",
        body: new FormData(formCadastroClinica)
      })
      .then(response => response.json())
      .then(response => {
        $('#modal-cadastro-clinica').modal('hide');
        $.LoadingOverlay('hide')
        if (response.sucess) {
          $.LoadingOverlay('show')
          $('.tabela-clinica').load('index.php/Controller_admin/tabela_clinicas', function() {
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
          $(".form-cadastro-clinica").closest('form').find("input[type=text], textarea").val("");
          $(".form-cadastro-clinica").closest('form').find("input[type=radio], input[type=checkbox]").prop('checked', false);
          $('.tabela-paciente').load('index.php/Controller_admin/tabela_clinicas', function() {
            $.LoadingOverlay('hide')
          });
        });
    });
});

</script>