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
              <th>No.</th>
              <th>Nama Mobil</th>
              <th>Harga Mobil</th>
              <th>Stock</th>
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
            <h5 class="modal-title" id="exampleModalLabel">Formulir Stock Mobil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{url('input-mobil')}}" method="POST" name="input-mobil" id="form_validation">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="nm_mobil" class="col-form-label">Nama Mobil:</label>
                <input type="text" class="form-control" id="nm_mobil" name="nm_mobil">
              </div>

              <div class="form-group">
                <label for="harga_mobil" class="col-form-label">Harga Mobil:</label>
                <textarea class="form-control" id="harga_mobil" name="harga_mobil"></textarea>
              </div>

              <div class="form-group">
                <label for="stock" class="col-form-label">Stock:</label>
                <textarea class="form-control" id="stock" name="stock"></textarea>
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
    $(document).ready( function () {
    $('#example').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('mobil-list') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nm_mobil', name: 'nm_mobil' },
                    { data: 'harga_mobil', name: 'harga_mobil' },
                    { data: 'stock', name: 'stock' },
                    { data: 'action', name: 'action', searchable: false, orderable: false,
                      render: function(data){
                          return '<a class="target-link btn btn-info btn-circle waves-effect waves-circle waves-float">Edit</a> <a class="target-link btn btn-info btn-circle waves-effect waves-circle waves-float">Hapus</a>';
                      }
                  }
                 ]
        });
     });
  </script>
</html>
