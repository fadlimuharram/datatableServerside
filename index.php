<?php
require_once"vendor/autoload.php";
$table = new App\Migration\MyMigration;
$table->createTable();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row"><br />
        <table class="table table-striped table-hover" id="tablenya">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Alamat</th>
            </tr>
          </thead>
          </table>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    var base_url = "<?=base_url;?>";
      $(document).ready(function() {
        var datatbl = $('#tablenya').DataTable({
          "processing":true,
          "serverSide":true,
          "order":[],
          "ajax":{
            url: base_url + "request.php",
            type:"POST"
          },
          "columnDefs":[
            {
              "target":[0],
              "orderable":false
            }
          ]
        });

      });
    </script>
  </body>
</html>
