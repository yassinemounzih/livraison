
  
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
                 
                                        

                
                <a href="index.php?Reçu_parAS"><button type="button"  class="btn btn-outline-primary">Reçu par MPacket <span class="badge badge-danger right">0</span> </button></a> 
               
               <a href="index.php?En_acheminement"><button type="button"  class="btn btn-outline-primary">En acheminement <span class="badge badge-danger right">0</span></button></a>
               <a href="index.php?En_Cours_de_livraison"><button type="button"  class="btn btn-outline-primary">En Cours de livraison <span class="badge badge-danger right">0</span></button></a>
               
               <a href="index.php?Livrée"><button type="button"  class="btn btn-outline-primary">Livrée <span class="badge badge-danger right">0</span></button></a>
               
               <a href="index.php?Annulée"><button type="button"  class="btn btn-outline-primary">Annulée <span class="badge badge-danger right">0</span></button></a>
               
               <a href="index.php?Chargement_Destinataire"><button type="button"  class="btn btn-outline-primary">Chargement Destinataire <span class="badge badge-danger right">0</span></button></a>
               
                 <a href="index.php?Demendes_Retour"><button type="button"  class="btn btn-outline-primary">Demendes Retour <span class="badge badge-danger right">0</span></button></a>
                 
                   <a href="index.php?Retours_Envoyés"><button type="button"  class="btn btn-outline-primary">Retours Envoyés <span class="badge badge-danger right">0</span></button></a>
                   
                     <a href="index.php?Retours_Reçus_par_Mpacket"><button type="button"  class="btn btn-outline-primary">Retours Reçus par Mpacket <span class="badge badge-danger right">0</span></button></a>
                     
                       <a href="index.php?terminées"><button type="button"  class="btn btn-outline-primary">terminées <span class="badge badge-danger right">0</span></button></a>
               
               </div>
                
               <br>
               
               
                <table id="example1" class="table table-bordered table-striped">
                 
             
                  <thead>    
                  <tr>
                   

                   
                    <th hidden></th>
                    <th width="3%">ID: </th>
                    <th width="16%">Code: </th>
                    <th width="30%">Destinataire: </th>
                    <th width="30%">Details: </th>
                    <th width="30%">Etat: </th>
                    <th width="10%">Remarques: </th>

                      
                    
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                      
        
                     $email = $_SESSION['vendeurs'];                         

                    $get_livre="SELECT * FROM users, demande  ,colis_livre  WHERE users.user_id=demande.user_id_vend AND users.user_email='$email' AND demande.dmd_id=colis_livre.dmd_id and (colis_livre.etat_lv='Annulé , attente changement destinataire' OR colis_livre.etat_lv='Refuser par client')";
                    
                    $run_livre=mysqli_query($con,$get_livre);
                   
    
                     $i=0;
                  
                        
                    while($rows_lv=mysqli_fetch_array($run_livre)){
                            
                        
                       $id_livre  =$rows_lv['id_livre'];
                       $livreur_id   =$rows_lv['livreur_id'];
                       $etat_lv =$rows_lv['etat_lv'];
                            
                       $referance_v =$rows_lv['referance_v'];
                       $full_name_cl=$rows_lv['full_name_cl'];
                       $adress=$rows_lv['adress'];
                       $numero_client=$rows_lv['numero_client'];
                     
                       $prix=$rows_lv['prix'];
                       $ouvrable=$rows_lv['ouvrable'];
                       $commentaire=$rows_lv['commentaire'];
                       $id_ville=$rows_lv['id_ville'];
                       $data_liv=$rows_lv['data_liv'];
                       $code_bar=$rows_lv['code_bar'];
                    
                          
                        
                        $select_ville="select * from villes where ville_id ='$id_ville' ";
                        $run_vill=mysqli_query($con,$select_ville);
                        $rows_vill=mysqli_fetch_array($run_vill);
                        $ville_name=$rows_vill['ville_name'];
                        
                        
                        $i++;
                        
                        
                        
               
                  ?>
                  <tr>
                   
                    <td hidden><?php echo $id_livre; ?></td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $code_bar; ?></td>
                   
                    <td>
                        
                          <ul>
                       <li>Référence : <?php echo $referance_v; ?></li>
                       <li><?php echo $full_name_cl; ?></li>
                        <li><?php echo $adress; ?></li>
                        <li><?php echo $ville_name; ?></li>
                        <li><?php echo $numero_client; ?></li>
                        </ul>
                        
                        
                    </td>
                    
                    
                    <td>
                        
                         <ul>
                       <li>Valeur: <?php echo $prix; ?> DH</li>
                       <li>C.R. ? : oui</li>
                        <li>Ouvrable ? : <?php echo $ouvrable; ?></li>
                        <li>Date <?php echo $data_liv; ?></li>
                        <li>Commentaire : <?php echo $commentaire; ?></li>
                             
                             
                        </ul>
                        
                    </td>
                    <td><?php echo $etat_lv; ?> <br> <br> 
                  
               

                             <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#modal-lg">
                                      changer le destinataire!              
                             </button>



                   <ul>
                  
                  
                  <li>
                
                 <a href="index.php?Colis_Demande_retour=<?php echo $id_livre; ?>">
                                     
                  
                                     
                                     
                   <i class="fa fa-trash-o"></i> Demande retour ! <br>
                                    
                 </a>
                   
         </li></ul>  
                    
                    </td>
                    
                    <td></td>
                   

                    
                    
                    
               
                  </tr>
              <?php    
                        
                        
                  }
                     ?>
                  </tbody>
                      
              
                  <tfoot>
                  <tr>
                   
                    <th hidden></th>
                    <th width="3%">ID: </th>
                    <th width="16%">Code: </th>
                    <th width="30%">Destinataire: </th>
                    <th width="30%">Details: </th>
                    <th width="30%">Etat: </th>
                    <th width="10%">Remarques: </th>
                    
                 
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
 




  
 
<div class="modal fade" id="modal-lg" >
        <div class="modal-dialog modal-lg modal-dialog-scrollable" >
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Changements Destinataire</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
             <div class="modal-body">
             <form   action="index.php?modal_edit" method="post" enctype="multipart/form-data">
             
           
              
                          
                   <input type="hidden" name="update_id" id="update_id">
               
                <div class="card-body">
                  <div class="form-row">
                <div class="col-md-3"> </div>
                <div class="form-group  col-md-6">
                    
                 <input style="text-align: center;" type="text" name="Référence" class="form-control" id="ref"  disabled>
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
              <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            </div>
               
                
                
              </form>
              </div>
            
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
















