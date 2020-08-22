
  
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
               
                <div class="text-center">
                 
        <a href="index.php?nouvelle_ramassage"><button type="button"  class="btn btn-outline-danger">Ajouter une Demande de Ramassages </button></a>                                 
<a href="index.php?ramassages_pas_effectues_stock"><button type="button"  class="btn btn-primary">Ramassages pas Effectues <span class="badge badge-danger right">0</span> </button></a> 
               
               <a href="index.php?ramassages_effectues_stock"><button type="button"  class="btn btn-outline-primary">Ramassages  Effectues <span class="badge badge-danger right">0</span></button></a>
               <a href="index.php?livre_en_stock"><button type="button"  class="btn btn-outline-primary">Mon Stock <span class="badge badge-danger right">0</span></button></a>
    
               
               </div>
                <br>
                
               
                <table id="example1" class="table table-bordered table-striped">
                 
           
                  <thead>    
                  <tr>
                    
                    <th hidden></th>
                    <th hidden></th>
                    <th width="5%">ID: </th>
                     <th width="20%">Expéditeur:</th>
                    <th width="12%">Heure demande: </th>
                    <th width="12%">Date de Ramassage: </th>
                    
                   
                   
                    <th width="12%">Etat:</th>
                   
                  
                   
                    
                   

                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                      
                     $email = $_SESSION['vendeurs'];
    
                    $get_demande="SELECT * FROM demande , users , colis_stock  WHERE demande.dmd_id=colis_stock.dmd_id  and users.user_id=demande.user_id_vend and users.user_role='Vendeur' and users.user_email='$email' AND demande.type='stock' AND demande.user_id_ram is null   order by 1 DESC";
                    
                    $run_demande=mysqli_query($con,$get_demande);
    
                     $i=0;
                  
                        
                    while($rows_demande=mysqli_fetch_array($run_demande)){
                            
                            
                     $dmd_id =$rows_demande['dmd_id'];
                     $id_stock =$rows_demande['id_stock'];
                     $adress_rmg=$rows_demande['adress_rmg'];
                     $number=$rows_demande['number'];
                     $date_rmg=$rows_demande['date_rmg'];
                     $date_now=$rows_demande['date_now'];
                     $type=$rows_demande['type'];
                        
                        
                     $reference=$rows_demande['reference'];
                     $type_colis_stock=$rows_demande['type_colis_stock'];
                        
                        
          $i++;
                  
                  ?>
                  <tr>
                   
                   <td hidden><?php echo $dmd_id; ?></td>
                   <td hidden><?php echo $id_stock; ?></td>
                    <td><?php echo $i ; ?></td>
                    
                           <td>
                    
                    
                  
                    <strong>Référance:</strong>&nbsp; <?php echo $reference ; ?> <br>
                    <strong>Type colis:</strong>&nbsp; <?php echo $type_colis_stock ; ?> <br>
                    <strong>Quantité:</strong>&nbsp; <?php echo $number ; ?> <br>
                    <strong>Adresse:</strong>&nbsp;<?php echo $adress_rmg ; ?> <br>
                   
                  
                    </td>
                    
                    <td>
                       <strong> <?php echo $date_now ;?> </strong> <br>
                   
                    </td>
                    <td>
                    
                    <strong> <?php echo $date_rmg ; ?></strong>
                   
                        </td>
                    
                   
                   
             
                    
           
         
                
                      <td>
                                <ul>
                                  <li>
                                 <strong style="color:red;"><?php echo $type; ?> <br></strong>  
                                    </li>
                                        
                                        
                   <button type="button" class="btn btn-primary editBtn3" data-toggle="modal" data-target="#modal-lg3">
                             Modifier            
                    </button>
                                        
                    
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
                   
                   <th hidden></th>
                   <th hidden></th>
                    <th width="5%">ID: </th>
                     <th width="20%">Expéditeur:</th>
                    <th width="12%">Heure demande: </th>
                    <th width="12%">Date de Ramassage: </th>
                    
                   
                   
                    <th width="12%">Etat:</th>
                   

                 
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
 







<div class="modal fade" id="modal-lg3" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable" >
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Changements Destinataire</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
             <div class="modal-body">
             <form   action="index.php?modal_edit2" method="post" enctype="multipart/form-data">
             
           
              
                          
                   <input type="hidden" name="update_id" id="update_id3">
                   <input type="hidden" name="update_id4" id="update_id4">
               
               
               
               
                <div class="card-body">
                    <div class="form-group">
                    <label for="ref">Référence:</label>
                    <input type="text" name="refe" class="form-control" id="ref3">
                  </div>
                 
                       <div class="form-group">
                    <label for="colis">Type des Colis:</label>
                    <input type="text" name="typeColis" class="form-control" id="colis">
                  </div>
                 
                  <div class="form-group">
                    <label for="nbr1">Estimation de nombre de colis:</label>
                    <input type="number" name="number" class="form-control" id="nbr1">
                  </div>
                     
                     
                 
                     
                      <div class="form-group">
                    <label for="date1">Date de ramassage:</label>
                    <input type="date" name="date_rmg" class="form-control" id="date">
                  </div>
                     
                     
                        <div class="form-group">
                <label for="inputDescription">Adresse de ramassage et remarques:</label>
                <textarea id="inputDescription" name="adress_rmg" class="form-control" rows="3"></textarea>
              </div>
                     
                     
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            </div>
               
                
                
              </form>
              </div>
            
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

