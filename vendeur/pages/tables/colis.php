
  <?php 

if(isset($_GET['colis'])){
    
    $id_colis=$_GET['colis'];
    
}

?>
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
               
                <div>
                 
                                        

                
                <a href="index.php?ramassages_pas_effectues"><button type="button"  class="btn btn-outline-primary">Ramassages pas Effectues <span class="badge badge-danger right">0</span> </button></a> 
               
               <a href="index.php?ramassages_effectues"><button type="button"  class="btn btn-outline-primary">Ramassages  Effectues <span class="badge badge-danger right">0</span></button></a>
               <a href="index.php?Reçu_parAS"><button type="button"  class="btn btn-outline-primary">Mes Livraisons <span class="badge badge-danger right">0</span></button></a>
               
        
               
    
               
               </div>
                <br>
                
               
                <table id="example1" class="table table-bordered table-striped">
                 
           
                  <thead>    
                  <tr>
                   
                    <th width="2%">ID: </th>
                    <th width="8%">Code: </th>
                    
                    
                    <th width="25%">Destinataire:</th>
                    <th width="25%">Details:</th>
                    <th width="20%">Etat:</th>
                   
                  
                   
                    
                   

                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                          <?php
                      
                     $email = $_SESSION['vendeurs'];
    
                    $get_demande="SELECT * FROM demande , users , colis_livre WHERE users.user_id=demande.user_id_vend AND demande.dmd_id=colis_livre.dmd_id and colis_livre.dmd_id='$id_colis' AND demande.type='Livraison' and users.user_email='$email' order by 1 DESC";
                    
                    $run_demande=mysqli_query($con,$get_demande);
    
                     $i=0;
                  
                        
                    while($rows_demande=mysqli_fetch_array($run_demande)){
                            
                            
                     $adress_rmg=$rows_demande['adress_rmg'];
                     $number=$rows_demande['number'];
                     $date_rmg=$rows_demande['date_rmg'];
                     $date_now=$rows_demande['date_now'];
                     $type=$rows_demande['type'];
                        
                        
                        
                       $id_livre  =$rows_demande['id_livre'];
                       $etat_lv =$rows_demande['etat_lv'];
                            
                       $referance_v =$rows_demande['referance_v'];
                       $full_name_cl=$rows_demande['full_name_cl'];
                       $adress=$rows_demande['adress'];
                       $numero_client=$rows_demande['numero_client'];
                     
                       $prix=$rows_demande['prix'];
                       $ouvrable=$rows_demande['ouvrable'];
                       $commentaire=$rows_demande['commentaire'];
                       $id_ville=$rows_demande['id_ville'];
                       $data_liv=$rows_demande['data_liv'];
                       $code_bar=$rows_demande['code_bar'];
                          
                        
                        $select_ville="select * from villes where ville_id ='$id_ville' ";
                        $run_vill=mysqli_query($con,$select_ville);
                        $rows_vill=mysqli_fetch_array($run_vill);
                        $ville_name=$rows_vill['ville_name'];
                        
                        $i++;
                  
                  ?>
                  <tr>
                   
                    <td><?php echo $i ; ?></td>
                    <td><?php echo $code_bar; ?></td>
                   
            
                    
                    <td>
                    
                    <ul>
                         <li><strong>Référence:</strong>&nbsp;<?php echo $referance_v; ?></li>
                       <li><strong>Nom:</strong>&nbsp;<?php echo $full_name_cl; ?></li>
                       <li><strong>Numéro:</strong>&nbsp;<?php echo $numero_client; ?></li>
                        <li> <strong>Ville:</strong>&nbsp;<?php echo $ville_name; ?></li>
                        <li> <strong>Adresse:</strong>&nbsp;<?php echo $adress; ?></li>
                       
                        
                        </ul>
                    

                    </td>
                     <td>
                         
                              <ul>
                       <li><strong>Valeur:</strong>&nbsp;<?php echo $prix; ?> DH</li>
                       <li> <strong>C.R. ? :</strong> oui</li>
                        <li><strong>Ouvrable ? :</strong>&nbsp;<?php echo $ouvrable; ?></li>
                    
                        <li><strong>Commentaire :</strong>&nbsp;<?php echo $commentaire; ?></li>
                        </ul>
                         
                     </td>
                
                      <td>
                                   <?php echo $type; ?> <br>
                                    <ul>
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
                    <th width="8%">Code: </th>
                    
                    
                    <th width="25%">Destinataire:</th>
                    <th width="25%">Details:</th>
                    <th width="20%">Etat:</th>
                   

                 
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
 

