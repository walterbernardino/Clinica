<table class="table table-bordered" id="dataTable-pacientes" width="100%" cellspacing="0">
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


        <script>
            $(document).ready(function() {
                $('#dataTable-pacientes').DataTable();
            });

        </script>