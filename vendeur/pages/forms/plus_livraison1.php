

<?php 

   
    
    if(!isset($_SESSION['vendeurs'])){
        
        echo "<script>window.open('../examples/login.php','_self')</script>";
        
    }else{
        


 
?>


  
  
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          <div class="col-sm-6">
            <h1>Demandes Pluseur Livraison</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  
  
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header center">
                <h3 class="card-title">Pluseur Livraison :</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?plus_livraison2"  method="post" enctype="multipart/form-data">
               
                <div class="card-body">
                
               
                
               <div class="form-group">
                <label for="inputDescription">Adresse de ramassage et remarques:</label>
                <textarea id="inputDescription" name="adress_rmg" class="form-control" rows="3"></textarea>
              </div>
                  <div class="form-group">
                    <label for="nbr1">Estimation de nombre de colis:</label>
                    <input type="number" name="number" class="form-control" id="nbr1">
                  </div>
                     
                     
                      <div class="form-group">
                    <label for="date1">Date de ramassage:</label>
                    <input type="date" name="date_rmg" class="form-control" id="date1">
                  </div>
                     
                     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success swalDefaultSuccess">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   
  </div>





<?php } ?>




