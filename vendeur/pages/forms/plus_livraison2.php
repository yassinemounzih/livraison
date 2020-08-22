                <?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $number=$_POST['number'];
    
}
else{
    
    echo'GET';
}


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ramassages  Effectués</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
               

               
                <table id="tbl" class="table table-bordered table-striped">
                 
                  <thead>    
                  <tr>
                   
                    <th>REFERENCE: </th>
                    <th>Nom Complet: </th>
                    <th>Adresse: </th>
                    <th>Ville: </th>
                    <th>Number: </th>
                    <th>Prix: </th>
                    <th>Ouvrable: </th>
                    <th>Commentaire: </th>
                    
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                         
                  </tbody>
                      
               
                  <tfoot>
                  <tr>
                   
                  <th>REFERENCE: </th>
                    <th>Nom Complet: </th>
                    <th>Adresse: </th>
                    <th>Ville: </th>
                    <th>Number: </th>
                    <th>Prix: </th>
                    <th>Ouvrable: </th>
                    <th>Commentaire: </th>
                 
                  </tr>
                  </tfoot>
                </table>
                
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <script>
      for(var i = 1;i<=<?php echo $number; ?>;i++){
        var table = document.getElementById("tbl");
          var tr = document.createElement('tr');
          
          for(var j=0 ; j <= 7; j++){
              var td = document.createElement('td');
              if(j==2){
                 var inpt = document.createElement('textarea');
                inpt.type = "text";
                inpt.className = "form-control";
                inpt.placeholder="text"; 
              }else{
                  var inpt = document.createElement('input');
                inpt.type = "text";
                inpt.className = "form-control";
                inpt.placeholder="text";
              }
               
                td.appendChild(inpt);
              tr.appendChild(td)
          }
          
          table.appendChild(tr);
      
      }
    

</script>