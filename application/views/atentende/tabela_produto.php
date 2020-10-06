<table class="table table-bordered" id="dataTable-produtos" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>Produto</th>
              <th>Total</th>
              <th>Data Compra</th>
              <th>Validade</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>Produto</th>
              <th>Total</th>
              <th>Data Compra</th>
              <th>Validade</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach($estogue as $paciente) :?>
            <tr>
                <td><?=$paciente['nome_produto']?></td>
                <td><?=$paciente['qtde']?></td>
                <td><?=$paciente['date_compra']?></td>
                <td><?=$paciente['validade']?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>


        <script>
            $(document).ready(function() {
                $('#dataTable-produtos').DataTable();
            });

        </script>