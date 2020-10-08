<table class="table table-bordered" id="dataTable-users" width="100%" cellspacing="0">
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
          < <tbody>
          <?php foreach($usuarios as $users) :?>
            <tr>
                <td><?=$users['id']?></td>
                <td><?=$users['nome']?></td>
                <td><?=$users['email']?></td>
                <td><?=$users['permisao']?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>


        <script>
            $(document).ready(function() {
                $('#dataTable-users').DataTable();
            });

        </script>