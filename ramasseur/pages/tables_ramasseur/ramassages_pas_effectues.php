
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ramassages pas Effectués</h1>
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
                  
                    <th>ID: </th>
                    <th>name vendeur: </th>
                    <th>adresse: </th>
                    <th>Estimation nomber colis: </th>
                    <th>date de ramassage: </th>
                    <th> Colis Livré: </th>
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                         $email = $_SESSION['ramasseurs'];
                    
                    
    
                    $get_demande=" SELECT * FROM vendeurs, demande , ramasseurs WHERE vendeurs.vend_id=demande.vendeur_id and  demande.etat_dmd='no ramasse' and ramasseurs.ramasseur_id=demande.ramasseur_id and ramasseurs.email_ramasseur='$email' order by 1 DESC  ";
                    
                    $run_demande=mysqli_query($con,$get_demande);
    
                     $i=0;
                  
                        
                    while($rows_demande=mysqli_fetch_array($run_demande)){
                            
                            
                     $full_name =$rows_demande['full_name'];
                     $dmd_id =$rows_demande['dmd_id'];
                     $adress_rmg=$rows_demande['adress_rmg'];
                     $number=$rows_demande['number'];
                     $date_rmg=$rows_demande['date_rmg'];
                    
                    
                        
                        $i++;
                  
                  ?>
                  <tr>
                   
                    <td><?php echo $i ; ?></td>
                    
                    <td><?php echo $full_name ; ?></td>
                     <td> <?php echo $adress_rmg ; ?></td>
                     <td><?php echo $number ; ?></td>


                    <td><?php echo $date_rmg ; ?></td>
                    
                   
                   <td><a href="indexR.php?ramasse=<?php echo $dmd_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Ramassé
                                    
                                     </a></td>
                   
                  </tr>
              <?php    
                        }
                    
                    
                     ?>
                  </tbody>
                      
               
                  <tfoot>
                  <tr>
                   
                    <th>ID: </th>
                    <th>name vendeur: </th>
                    <th>adresse: </th>
                    <th>Estimation nomber colis: </th>
                    <th>date de ramassage: </th>
            
                    <th>Colis Livré: </th>
                 
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
 

