
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ramassages Effectués</h1>
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
               
                          <div class="text-center">
                 
      <a href="indexAdmin.php?verifier_colis_livree"><button type="button"  class="btn btn-outline-primary">Vérification les colis Livraisons  <span class="badge badge-danger right">0</span> </button></a> 
                 
                  <a href="indexAdmin.php?verifier_colis_stock"><button type="button"  class="btn btn-primary">Vérification Les Demandes Stock <span class="badge badge-danger right">0</span> </button></a> 
               
       
    
               
               </div>
                <br>
                
               
                <table id="example1" class="table table-bordered table-striped">
                 
           
                  <thead>    
                  <tr>
                   
                     <th width="2%">ID: </th>
                      <th width="20%">Details:</th>
                     <th width="25%">Expéditeur:</th>
                    <th width="20%">Date</th>
            
                    <th width="16%">Etat:</th>
                   
                   
                  
                   
                    
                   

                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                      
                    
    
                    $get_demande="SELECT * FROM demande ,ramasseurs , vendeurs , colis_stock   WHERE demande.dmd_id=colis_stock.dmd_id  and vendeurs.vend_id=demande.vendeur_id AND  demande.type='Stocké'  and ramasseurs.ramasseur_id=demande.ramasseur_id and (demande.etat_dmd='no ramasse' OR demande.etat_dmd='ramasse')   order by 1 DESC";
                    
                    $run_demande=mysqli_query($con,$get_demande);
    
                     $i=0;
                  
                        
                    while($rows_demande=mysqli_fetch_array($run_demande)){
                            
                      $dmd_id =$rows_demande['dmd_id'];      
                     $adress_rmg=$rows_demande['adress_rmg'];
                     $number=$rows_demande['number'];
                     $date_rmg=$rows_demande['date_rmg'];
                     $date_now=$rows_demande['date_now'];
                     $type=$rows_demande['type'];
                        
                        
                     $reference=$rows_demande['reference'];
                     $type_colis_stock=$rows_demande['type_colis_stock'];
                        
                        
                    $nameR=$rows_demande['nameR'];
                        
                    $full_name=$rows_demande['full_name'];
                        
                        
                        
           
                        
                        $i++;
                  
                  ?>
                  <tr>
                   
                     <td><?php echo $i ; ?></td>
                     
                              <td>
                    
                  <strong>Ramasseur :</strong> &nbsp;<span style="color:red;"><?php echo $nameR ; ?></span><br>
                  <strong>Vendeur :</strong> &nbsp;  <span style="color:red;"><?php echo $full_name ; ?></span>
            
                    
                    </td>
                     
                         <td>
                    
                    
                    <strong>Référance:</strong>&nbsp; <?php echo $reference ; ?> <br>
                    <strong>Type colis:</strong>&nbsp; <?php echo $type_colis_stock ; ?> <br>
                    <strong>Quantité:</strong>&nbsp; <?php echo $number ; ?> <br>
                    <strong>Adresse:</strong>&nbsp;<?php echo $adress_rmg ; ?> <br>
                   
                  
                    </td>
                     
                    <td>
                        
                   <strong>Heure demande:</strong> <p><?php echo $date_now ;?></p>
                   
                    <strong>Date de Ramassage::</strong><p> <?php echo $date_rmg ; ?></p> 
                        </td>
                    
                   
                   
                
                    
           
         
                
                      <td>
                                  <ul>
                                  <li>
                                   <?php echo $type; ?> <br>
                                    </li>
                                        
                                          <li>
                                   <a href="indexAdmin.php?verification_Stock=<?php echo $dmd_id; ?>">
                                    
                      <i class="fa fa-trash-o"></i> Vérifier
                                    
                                     </a> 
                                    </li>
                                        
                                                       <li>
                                   <a href="#">
                                    
                      <i class="fa fa-trash-o"></i> Ticket
                                    
                                     </a> 
                                    </li> 
                                        
                                         <li>
                                   <a href="#">
                                    
                      <i class="fa fa-trash-o"></i> Modifier
                                    
                                     </a> 
                                    </li> 
                                    <li>      
                         <a href="#">
                                    
                      <i class="fa fa-trash-o"></i> Supprimer
                                    
                                     </a>
                                     
                                     </li>
                                     </ul>
                                     
                                     </td>
                                     
                                     
                  </tr>
              <?php    
                        }
                    
                    
                     ?>
                  </tbody>
                      
               
                  <tfoot>
                  <tr>
                   
                    <th width="2%">ID: </th>
                     <th width="20%">Details:</th>
                    <th width="25%">Expéditeur:</th>
                   <th width="20%">Date</th>
                             
                    <th width="16%">Etat:</th>
                   

                 
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
 

