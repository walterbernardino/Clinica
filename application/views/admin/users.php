<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 " align="right ">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Casdastro de usuarios</button>
    </div>
    <div class="card-body">
      <div class="table-responsive tabela-users">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome usuario</th>
              <th>E-mail</th>
              <th>Permisão</th>
              <th>Id clinica</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Nome Clinica</th>
              <th>E-mail</th>
              <th>Permisão</th>
              <th>Id clinica</th>
            </tr>
          </tfoot>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>

    <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="modal-cadastro-users" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro de usuarios</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form class="form-cadastro-users" id="cad_users">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputnome">Nome Usuario</label>
                <input type="text" class="form-control" name="nome" id="inputnome" placeholder="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputemail">E-mail</label>
                <input type="email" class="form-control" name="	email" id="inputemail" placeholder="" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputAddress">Senha</label>
                <input type="password"  class="form-control " id="inputAddress" name="senha" placeholder="" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">permisao</label>
                <input type="number" class="form-control" name="permisao" id="inputAddress2" placeholder="" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputCity">Id Clinica</label>
                <input type="number" name="id_clinica" class="form-control" id="inputCity" required>
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

</script>