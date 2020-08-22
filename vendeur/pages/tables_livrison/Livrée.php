
  
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
                   

                   
                    <th width="5%">ID: </th>
                    <th width="20%">Code: </th>
                    <th width="30%">Destinataire: </th>
                    <th width="30%">Details: </th>
                    <th width="15%">Etat: </th>
                    <th width="10%">Remarques: </th>

                      
                    
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                      
        
                                $email = $_SESSION['vendeurs'];                         

                    $get_livre="SELECT * FROM users, demande  ,colis_livre  WHERE users.user_id=demande.user_id_vend AND users.user_email='$email' AND demande.dmd_id=colis_livre.dmd_id and colis_livre.etat_lv='Livré' ";
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
                       $date_livré=$rows_lv['date_livré'];
                        $code_bar=$rows_lv['code_bar'];
                    
                          
                        
                        $select_ville="select * from villes where ville_id ='$id_ville' ";
                        $run_vill=mysqli_query($con,$select_ville);
                        $rows_vill=mysqli_fetch_array($run_vill);
                        $ville_name=$rows_vill['ville_name'];
                        
                        
                        $i++;
                        
                        
                        
               
                  ?>
                  <tr>
                   
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
                    <td><?php echo $etat_lv; ?> <br>
                    
                    Livré Le : <?php echo $date_livré; ?>
                    
         
                    
                    
                    </td>
                    
                    <td></td>
                   

                    
                    
                    
               
                  </tr>
              <?php    
                        
                        
                  }
                     ?>
                  </tbody>
                      
              
                  <tfoot>
                  <tr>
                   
                    <th width="5%">ID: </th>
                    <th width="20%">Code: </th>
                    <th width="30%">Destinataire: </th>
                    <th width="30%">Details: </th>
                    <th width="15%">Etat: </th>
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
 

