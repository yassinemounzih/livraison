     <?php 

        
    if(!isset($_SESSION['ramasseurs'])){
        
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
               
               
                
               
                <table id="example1" class="table table-bordered table-striped">
               
                  <thead>    
                  <tr>
                   
                    <th>ID:</th>
                  
                    <th>date de ramassage:</th>
                    
                    <th>Adresse de ramassage:</th>
                    
                    <th>Estimation nomber colis:</th>
              
                    <th>Colis ramassé:</th>
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                    
    
        
                     $email = $_SESSION['ramasseurs'];
                    
                    
    
                    $get_demande=" SELECT * FROM demande , ramasseurs WHERE ( demande.etat_dmd='vérifier' OR demande.etat_dmd='ramassé' ) and ramasseurs.ramasseur_id=demande.ramasseur_id and ramasseurs.email_ramasseur='$email' order by 1 DESC  ";
                    
                    $run_demande=mysqli_query($con,$get_demande);
        
        
                     $i=0;
                  
                        
                    while($rows_demande=mysqli_fetch_array($run_demande)){
                            
                            
                    $date_rmg=$rows_demande['dateR_now'];
                        
                    $number=$rows_demande['number'];
                    $adress_rmg=$rows_demande['adress_rmg'];
              
                     $type=$rows_demande['type'];
                        
                        $i++;
                  
                  ?>
                  <tr>
                   
                    <td><?php echo $i ; ?></td>
                   
                    <td><?php echo $date_rmg ; ?></td>
                    <td><?php echo $adress_rmg ; ?></td>
                    
                    <td><?php echo $number ; ?></td>
                 
                  
                   <td><?php echo $type; ?></td>
                   
                  </tr>
              <?php    
                        }
                    
                    
                     ?>
                  </tbody>
                      
               
                  <tfoot>
                  <tr>
                   
                    <th>ID:</th>
               
                    <th>date de ramassage:</th>
                    <th>Adresse de ramassage:</th>

                    <th>Estimation nomber colis:</th>
                    
                  
                    <th>Colis ramassé:</th>
                 
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
 

<?php } ?>