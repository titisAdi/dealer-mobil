<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Sistem Dealer Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Informasi Stok Mobil</h2>
      <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Input Data Mobil</button>
      <br>                                         
      <br>                                         
      <div class="table-responsive">          
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulir Stock Mobil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="nm_mobil" class="col-form-label">Nama Mobil:</label>
                <input type="text" class="form-control" id="nm_mobil">
              </div>

              <div class="form-group">
                <label for="harga_mobil" class="col-form-label">Harga Mobil:</label>
                <textarea class="form-control" id="harga_mobil"></textarea>
              </div>

              <div class="form-group">
                <label for="stock" class="col-form-label">Stock:</label>
                <textarea class="form-control" id="stock"></textarea>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="button" class="btn btn-primary" id="simpan-mobil">
                <div id="simpan">Simpan</div>
              </button>
          </div>

        </div>
      </div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>

  <script type="text/javascript">
    $(function(){
      $('#simpan').click(function(){
      var nm_mobil    = $('#nm_mobil').val();
      var harga_mobil = $('#harga_mobil').val();
      var stock       = $('#stock').val();

        $.ajax({
        type:"POST",
        url:"input-mobil",
        data:
          "nm_mobil="+nm_mobil,
          success:function(data){
          $("#nm_mobil").val("");
          $("#harga_mobil").val("");
          $("#stock").val("");
          },
        });
        return false;
      });
    });
  </script>
</html>
