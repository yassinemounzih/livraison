

<?php 

   
    
    if(!isset($_SESSION['vendeurs'])){
        
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
            <h1>Demandes de Livraisons Directement </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  
  
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
         
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header center">
                <h3 class="card-title"> Livraisons Directement:</h3>
                        
            
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?nouvelle_livraison" class="form-horizontal"  method="post" enctype="multipart/form-data">
               
                <div class="card-body">
                
                     <div class="form-row">
                    <div class="form-group col-md-8">
                    <label for="refe1">Référence :</label>
                    <input type="text" name="refe" class="form-control" id="refe1">
                  </div>
                  
                  
                  
                       <div class="form-group col-md-4">
                    <label for="exampleInputPassword1">Date de ramassage:</label>
                    <input type="date" name="date_rmg" class="form-control" id="exampleInputPassword1">
                  </div>
                     
                  
                  </div>
                
                
                  
                
                <div class="form-row">
                
               <div class="form-group col-md-6">
                <label for="inputDescription">Adresse Expéditeur:</label>
                <textarea id="inputDescription" name="adress_rmg" class="form-control" rows="3"></textarea>
              </div>
                 
                    <div class="form-group col-md-6">
                <label for="inputDescription">Adresse Destinataire:</label>
                <textarea id="inputDescription" name="adress_des" class="form-control" rows="3"></textarea>
              </div>
                 
                 </div>
                
                        <div class="form-group">
                    <label for="name">Nom et Prénom (Destinataire)  :</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>
                
                    
                     <div class="form-group">
                            
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
                     
                     
                    <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="tele1">Téléphone :</label>
                    <input type="text" name="tele" class="form-control" id="tele1">
                  </div>
                  
                    <div class="form-group col-md-4">
                    <label for="dh">Valeur (Dh):</label>
                    <input type="number" name="prix" class="form-control" id="dh">
                  </div>
                  
                     
                                          <div class="form-group col-md-4">
                            
                            <label >Colis ouvrable par livreur :</label>
                             <select name="ouvrable" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Colis ouvrable par livreur :</option>
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

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success swalDefaultSuccess">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   
  </div>




<?php

if(isset($_POST['submit'])){
    
                  
//    $code_bar='AS'.hexdec(uniqid());
    
    
    $etat='Nouvelle Demande';
    $type='Livraison';
    $number=1;

    $etat_lv='en attente de validation';
    
    
    $adress_rmg=$_POST['adress_rmg'];
    $date_rmg=$_POST['date_rmg'];
    
    
    $refe=$_POST['refe'];
    
    $adress_des=$_POST['adress_des'];
    $name=$_POST['name'];
    $ville=$_POST['ville'];
    $tele=$_POST['tele'];
    $prix=$_POST['prix'];
    $ouvrable=$_POST['ouvrable'];
    $commentaire=$_POST['commentaire'];
    
    
    
    
    
    
    
    
//    $now=date('Y-m-d h:i:s');
    
      
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
    
    
       $email = $_SESSION['vendeurs'];
    
    $get_vend="select * from users where users.user_role='Vendeur' and users.user_email='$email'";
    
    $run_vend=mysqli_query($con ,$get_vend);
    
    $rows=mysqli_fetch_array($run_vend);
    
    $id_vend=$rows['user_id'];
    
     try {
  
         // First of all, let's begin a transaction
    $con->begin_transaction();
    
   $con->query("insert into demande (etat_dmd,adress_rmg,number,date_rmg,date_now,type,user_id_vend) values ('$etat','$adress_rmg','$number','$date_rmg',Now(),'$type','$id_vend');");
    
   
$con->query("insert into colis_livre (etat_lv , referance_v , full_name_cl , adress , numero_client , prix , ouvrable , commentaire ,data_liv, id_ville ,dmd_id) values ('$etat_lv','$refe','$name','$adress_des','$tele','$prix','$ouvrable','$commentaire',NOW(),'$ville',last_insert_id());");
    
    $con->query("update colis_livre set code_bar = concat('AS',LPAD(last_insert_id(),11,0)) WHERE id_livre =last_insert_id();");
    
     
    
    
   
//     $id_livre = $con->insert_id;
    
    $con->query("insert into history_colis (etat_history,commentaire,date_history,id_livre) values ('Demande de livraison','$commentaire',Now(),last_insert_id());");
     
     
         
         $con->commit();
             if($con->commit()){
                
                
                 echo"<script>alert('You have been Insert Demande sucessfully')</script>"; 
//      header("location:../forms/nouvelle_ramassage.php");
        echo "<script>window.open('index.php?mes_demandes_livraison','_self')</script>";
   

     }
     
    

    }
    
 catch (\Throwable $e) {
    // An exception has been thrown
    // We must rollback the transaction
    $con->rollback();
    throw $e; // but the error must be handled anyway
}
    mysqli_close($con);
}
?>







<?php } ?>
