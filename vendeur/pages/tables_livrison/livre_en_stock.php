
  
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
                   
                    <th>ID: </th>
                    <th>la date de stockage: </th>
                    <th>référence des colis: </th>
                    <th>type des colis stocké: </th>
                    <th>nbr des colis a stocké: </th>
                    <th>total des colis: </th>
                    <th>les colis sortant: </th>
                    <th>le réste: </th>
                    <th>Livre: </th>
                    <th>reture: </th>
                    
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                      
        
                                   $email = $_SESSION['vendeurs'];                         

                    $get_stock="SELECT * FROM users, demande  ,colis_livre  WHERE users.user_id=demande.user_id_vend AND users.user_email='$email' AND demande.dmd_id=colis_livre.dmd_id";
                    
                    $run_stock=mysqli_query($con,$get_stock);
                   
    
                     $i=0;
                  
                        
                    while($rows_stocke=mysqli_fetch_array($run_stock)){
                            
                        
                         $number =$rows_stocke['number'];
                            
                       $id_stock =$rows_stocke['id_stock'];
                       $date_stockage=$rows_stocke['date_stockage'];
                       $reference=$rows_stocke['reference'];
                       $type_colis_stock=$rows_stocke['type_colis_stock'];
                     
                       $total_colis=$rows_stocke['total_colis'];
                       $colis_sortant=$rows_stocke['colis_sortant'];
                       $colis_sortant=$rows_stocke['colis_sortant'];
                       $colis_reste=$rows_stocke['colis_reste'];
                    
                          
                        
                        $i++;
               
                  ?>
                  <tr>
                   
                    <td><?php echo $i ; ?></td>
                   
                    <td><?php echo $date_stockage ; ?></td>
                    <td><?php echo $reference ; ?></td>
                    <td><?php echo $type_colis_stock ; ?></td>
                    
                    <td><?php echo $number ; ?></td>
                    <td><?php echo $total_colis ; ?></td>
                    <td><?php echo $colis_sortant ; ?></td>
                    <td><?php echo $colis_reste ; ?></td>
                    
                    
                    
                    <td>  <a href="index.php?livre=<?php echo $id_stock; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Livré
                                    
                                     </a> </td>
                    <td> <a href="index.php?retour=<?php echo $id_stock; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> retour
                                    
                                     </a></td>

                    
                    
                    
               
                  </tr>
              <?php    
                        
                        
                  }
                     ?>
                  </tbody>
                      
              
                  <tfoot>
                  <tr>
                   
                       <th>ID: </th>
                    <th>la date de stockage: </th>
                    <th>référence des colis: </th>
                    <th>type des colis stocké: </th>
                    <th>nbr des colis a stocké: </th>
                    <th>total des colis: </th>
                    <th>les colis sortant: </th>
                    <th>le réste: </th>
                    <th>Livre: </th>
                    <th>reture: </th>
                 
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
 

