     <?php 

        
    if(!isset($_SESSION['admin'])){
        
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
               
                      <div>
                 <a href="indexAdmin.php?nouvelle_ramassage"><button type="button"  class="btn btn-outline-primary">Nouvelle Demande  <span class="badge badge-danger right">0</span> </button></a> 
                  <a href="indexAdmin.php?no_ramasse"><button type="button"  class="btn btn-outline-primary">Demande no ramassé <span class="badge badge-danger right">0</span> </button></a> 
                <a href="indexAdmin.php?ramasse"><button type="button"  class="btn btn-outline-primary"> Demande ramassé <span class="badge badge-danger right">0</span> </button></a> 
              
             
               
             
               
               </div> <br>
               
                <table id="example1" class="table table-bordered table-striped">
               
                  <thead>    
                  <tr>
                   
                    <th>ID:</th>
                   <th>Details:</th>
                    <th>date de ramassage:</th>
                    
                    
                    <th>Adresse de ramassage:</th>
                    
                    <th>Estimation nomber colis:</th>
              
                    <th>Colis ramassé:</th>
 
             
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                    
    
        
                     
                    
                    
    $get_demande="SELECT * FROM demande , users WHERE users.user_id=demande.user_id_vend and users.user_id=demande.user_id_ram and  demande.etat_dmd='ramassé'";
        
        
                    
                    $run_demande=mysqli_query($con,$get_demande);
        
        
                     $i=0;
                  
                        
                    while($rows_demande=mysqli_fetch_array($run_demande)){
                            
                     $nameR=$rows_demande['user_name'];
                        
                    $full_name=$rows_demande['user_name'];
                        
                    $dmd_id =$rows_demande['dmd_id'];

                    $date_rmg=$rows_demande['dateR_now'];
                        
                    $number=$rows_demande['number'];
                    $adress_rmg=$rows_demande['adress_rmg'];
              
                     $type=$rows_demande['type'];
                        
                        
                       
                        
                        
                        $i++;
                  
                  ?>
                  <tr>
                   
                    <td><?php echo $i ; ?></td>
                    
                    <td>
                    
                  <strong>Ramasseur :</strong> &nbsp;<span style="color:red;"><?php echo $nameR ; ?></span><br>
                  <strong>Vendeur :</strong> &nbsp;  <span style="color:red;"><?php echo $full_name ; ?></span>
            
                    
                    </td>
                   
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
                   <th>Details:</th>
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