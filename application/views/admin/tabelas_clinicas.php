<table class="table table-bordered" id="dataTable-clinicas" width="100%" cellspacing="0">
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
            <?php foreach($pacientes as $paciente) :?>
            <tr>
                <td><?=$paciente['nome_clinica']?></td>
                <td><?=$paciente['logradouro']?></td>
                <td><?=$paciente['cidade']?></td>
                <td><?=$paciente['cnpj']?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>


        <script>
            $(document).ready(function() {
                $('#dataTable-clinicas').DataTable();
            });

        </script>