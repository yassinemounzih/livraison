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
               
                <div class="text-center">
                 <a href="indexAdmin.php?verifier_colis_livree"><button type="button"  class="btn btn-primary">Vérification les colis Livraisons  <span class="badge badge-danger right">0</span> </button></a> 
                 
                  <a href="indexAdmin.php?verifier_colis_stock"><button type="button"  class="btn btn-outline-primary">Vérification Les Demandes Stock <span class="badge badge-danger right">0</span> </button></a> 
              
              
               
             
               
               </div> <br>
                
               
                <table id="example1" class="table table-bordered table-striped">
               
                  <thead>    
                  <tr>
                   
                <th width="3%">ID:</th>
                   <th width="20%">Details:</th>
                    <th width="18%">date de ramassage:</th>
                    
                    
                    <th width="20%">Adresse de ramassage:</th>
                    
                     <th width="18%">Estimation nomber colis:</th>
              
                    <th width="15%">Colis:</th>
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                    
    
        
                     $email = $_SESSION['admin'];
                    
                    
    
                    $get_demande="SELECT * FROM vendeurs , demande , ramasseurs WHERE vendeurs.vend_id=demande.vendeur_id and (demande.etat_dmd='no ramassé' or demande.etat_dmd='ramassé') and demande.type='Livraison' and ramasseurs.ramasseur_id=demande.ramasseur_id order by 1 DESC ";
                    
                    $run_demande=mysqli_query($con,$get_demande);
        
        
                     $i=0;
                  
                        
                    while($rows_demande=mysqli_fetch_array($run_demande)){
                            
                            
                     $dmd_id =$rows_demande['dmd_id'];
                     $nameR=$rows_demande['nameR'];
                        
                    $full_name=$rows_demande['full_name'];
                        
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
                 
                  
                   <td>
                   
                   <ul>
                       <li>
                   
                   <?php echo $type; ?>
                   
                   </li>
                       <li>   
                                     <a href="indexAdmin.php?colis=<?php echo $dmd_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> View Colis </a>
                                    
                 
                      </li>
                       <li>  
                       
                        <a href="indexAdmin.php?verification=<?php echo $dmd_id; ?>">
                                     
                        <i class="fa fa-trash-o"></i> Vérifée </a>
                       
                       </li>
                       
                          <li>  
                       
                        <a href="#">
                                     
                        <i class="fa fa-trash-o"></i> Edit </a>
                       
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
                   
                   <th width="3%">ID:</th>
                   <th width="20%">Details:</th>
                    <th width="18%">date de ramassage:</th>
                    
                    
                    <th width="20%">Adresse de ramassage:</th>
                    
                    <th width="18%">Estimation nomber colis:</th>
              
                    <th width="15%">Colis:</th>
                 
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