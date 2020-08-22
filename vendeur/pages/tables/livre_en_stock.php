
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mon Stock</h1>
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
                 <a href="index.php?livre_en_stock"><button type="button"  class="btn btn-primary">Mon Stock <span class="badge badge-danger right">0</span></button></a>
                 
                                       
<a href="index.php?mes_demandes_livraison_stock"><button type="button"  class="btn btn-outline-primary">Mes demandes de livraison <span class="badge badge-danger right">0</span> </button></a> 
               
               

               </div>
                <br>
                
               
                <table id="example1" class="table table-bordered table-striped">
                 
             
                  <thead>    
                  <tr>
                   
                     <th width="2%">ID: </th>
                    <th width="15%">la date de stockage: </th>
                    <th width="20%">référence des colis: </th>
                    <th width="10%">colis a stocké: </th>
                    <th width="20%">type des colis stocké: </th>
                    <th width="15%">Colis: </th>
                    <th width="15%">Etat: </th>
                    
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                      
        
                                   $email = $_SESSION['vendeurs'];                         

                    $get_stock="SELECT * FROM users , demande , colis_stock WHERE users.user_id=demande.user_id_vend AND demande.dmd_id=colis_stock.dmd_id AND users.user_email='$email' and demande.type='stock' AND demande.etat_dmd='vérifier'";
                      
                      
                    
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
                   
                    <td style="color:red;"><strong><?php echo $date_stockage ; ?></strong></td>
                    <td><?php echo $reference ; ?></td>
                    <td><strong><?php echo $number ; ?></strong></td>
                    <td><?php echo $type_colis_stock ; ?></td>
                    
                    <td>
                    
                    <strong>Total : <span style="color:rgb(0, 255, 255);"> <?php echo $total_colis ; ?></span></strong> <br>
                    <strong >Sortant : <span style="color:rgb(0, 255, 128);"><?php echo $colis_sortant ; ?></span></strong><br>
                    <strong>Reste : <span style="color:rgb(253, 85, 85);"><?php echo $colis_reste ; ?></span> </strong>
                    
                    
                    
                    </td>
                   
                    
                    
                    
                    <td> 
                                   
                    <button type="button" class="btn btn-primary LivBtn" data-toggle="modal" data-target="#modal-lg2">
                             Livraisons            
                    </button>
                                   
                                    <ul>
                                
                                      <li>
                    <a href="index.php?retour=<?php echo $id_stock; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> retour
                                    
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
                    <th width="15%">la date de stockage: </th>
                    <th width="20%">référence des colis: </th>
                    <th width="10%">colis a stocké: </th>
                    <th width="20%">type des colis stocké: </th>
                    <th width="15%">Colis: </th>
                    <th width="15%">Etat: </th>
                    
                 
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
 





<div class="modal fade" id="modal-lg2" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable" >
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Livraisons a partir</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
             <div class="modal-body">
             <form   action="index.php?modal_livraison" method="post" enctype="multipart/form-data">
             
           
              
                          
                   <input type="hidden" name="insert_id2" id="update_id2">
               
                <div class="card-body">
                  <div class="form-row">
                <div class="col-md-3"> </div>
                <div class="form-group  col-md-6">
                    <label for="">Référence:</label>
                 <input style="text-align: center;" type="text" name="refe" class="form-control" id="ref">
                  </div>
                  </div>
                
                 <div class="form-group">
                    <label for="nom">Nom Destinataire:</label>
                    <input type="text" name="nom_complet" class="form-control" id="nom">
                  </div>
                
               <div class="form-group">
                <label for="inputDescription">Adresse Destinataire:</label>
                <textarea id="inputDescription" name="adress_des" class="form-control" rows="3"></textarea>
              </div>
                  
                     <div class="form-row">
                     
                    <div class="form-group col-md-3">
                            
                            <label for="inputDescription">ville (Destinataire):</label>
                             <select name="ville" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select Ville </option>
                              
                              <?php 
                              
                              $get_villes = "select * from villes";
                              $run_villes = mysqli_query($con,$get_villes);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_villes)){
                                  
                                  $ville_id = $row_p_cats['ville_id'];
                                  $ville_name = $row_p_cats['ville_name'];
                                  
                                  echo "
                                  
                                  <option value='$ville_id'> $ville_name </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                  </div>
                    
                    
                                         
                    
                    <div class="form-group col-md-3">
                    <label for="tele1">Téléphone :</label>
                    <input type="text" name="tele" class="form-control" id="tele1">
                  </div>
                  
                    <div class="form-group col-md-3">
                    <label for="dh">Valeur (Dh):</label>
                    <input type="number" name="prix" class="form-control" id="dh">
                  </div>
                  
                     
                                          <div class="form-group col-md-3">
                            
                            <label >Colis ouvrable:</label>
                             <select name="ouvrable" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Colis ouvrable:</option>
                              <option value="Oui" > Oui </option>
                              <option value="Non"> Non </option>
                              
                   
                          </select><!-- form-control Finish -->
                          
                  </div>
                     
                     </div>
                     
                 <div class="form-group">
                <label for="commentaire">Commentaire (lu par le livreur) :</label>
                <textarea id="commentaire" name="commentaire" class="form-control" rows="3"></textarea>
              </div>
                 
                     
                     
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" name="insert" class="btn btn-primary">Save changes</button>
            </div>
               
                
                
              </form>
              </div>
            
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>