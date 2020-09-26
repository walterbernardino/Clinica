<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!--<h1 class="h3 mb-2 text-gray-800">Pacientes</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  -->
  


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 " >
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" >Casdastrar Produto</button>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Produto</th>
              <th>Total</th>
              <th>Minimo</th>
              <th>Validade</th>
              <!--<th>Start date</th>
            <th>Salary</th>-->
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Produto</th>
              <th>Total</th>
              <th>Minimo</th>
              <th>Validade</th>
              <!--<th>Start date</th>
            <th>Salary</th>-->
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Pasta de dente</td>
              <td>89</td>
              <td>25</td>
              <td>31/12/2020</td>
            </tr>
            <tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="modal-cadastro-produtos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro de Produtos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form class="form-cadastro-produtos" id="cad_produtos">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputnome">Nome</label>
                <input type="text" class="form-control" name="nome_produto" id="inputnome" placeholder="Nome do produto" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputemail">Quantidade</label>
                <input type="text" class="form-control" name="qtde" id="inputemail" placeholder="Quantidade" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress">Validade</label>
                <input type="date"  class="form-control " id="inputAddress" name="validade" placeholder="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Valor unitario</label>
                <input type="texte" class="form-control" name="valor_unitario" id="inputAddress2" placeholder="" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Data da compra</label>
                <input type="date" name="date_compra" class="form-control" id="inputCity" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputCpf">Motivo</label>
                <input type="text" class="form-control" id="inputCpf" name="motivo" required>
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

$('#modal-cadastro-produtos').on('hidden.bs.modal', function() {
  alert("OLA")
});




  let formCadastroProdutos = document.querySelector('.form-cadastro-produtos');

  formCadastroProdutos.addEventListener('submit', e => {
    e.preventDefault();

    $.LoadingOverlay('show')
    fetch('./produtos-save', {
        method: "POST",
        body: new FormData(formCadastroProdutos)
      })
      .then(response => response.json())
      .then(response => {
        $('#modal-cadastro-produtos').modal('hide');
        $.LoadingOverlay('hide')
        if (response.sucess) {
					$.notify(response.sucess, 'success');
				} else if (response.error) {
					$.notify(response.error, 'error');
				}        
      
      })

  })
</script>