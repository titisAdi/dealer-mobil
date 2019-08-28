<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penjualan - Sistem Dealer Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Informasi Penjualan</h2>
      <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Input Data Penjualan</button>
      <br>                                         
      <br>                                         
      <div class="table-responsive">          
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Pembeli</th>
              <th>Email Pembeli</th>
              <th>Nomor Telepon Pembeli</th>
              <th>Mobil yang Dibeli</th>
              <th>Aksi</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Formulir Penjualan</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{url('input-penjualan')}}" method="POST" name="input-mobil" id="form_validation">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="nm_pembeli" class="col-form-label">Nama Pembeli:</label>
                <input type="text" class="form-control" id="nm_pembeli" name="nm_pembeli">
              </div>

              <div class="form-group">
                <label for="email_pembeli" class="col-form-label">Email Pembeli:</label>
                <input type="email" class="form-control" id="email_pembeli" name="email_pembeli"></input>
              </div>

              <div class="form-group">
                <label for="nomor_telepon" class="col-form-label">Nomor Telepon Pembeli:</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"></input>
              </div>

              <div class="form-group">
                <label for="mobil_dibeli" class="col-form-label">Mobil yang Dibeli:</label>
                <input type="text" class="form-control" id="mobil_dibeli" name="mobil_dibeli"></input>
              </div>

               <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript">
    var delete_url      = 'http://127.0.0.1:8000/delete-mobil';

    $(document).ready( function () {
    $('#example').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('penjualan-list') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nm_pembeli', name: 'nm_pembeli' },
                    { data: 'email_pembeli', name: 'email_pembeli' },
                    { data: 'nomor_telepon', name: 'nomor_telepon' },
                    { data: 'mobil_dibeli', name: 'mobil_dibeli' },
                    { data: 'action', name: 'action', searchable: false, orderable: false,
                      render: function(data){
                          return '<a class="target-link btn btn-danger btn-circle waves-effect waves-circle waves-float" href="'+ delete_url + '/2'+'">'+
                          '    Hapus'+
                          '</a> ';
                    }
                  }
                 ]
        });
     });
  </script>
</html>
