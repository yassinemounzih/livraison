

<?php 

   
    
    if(!isset($_SESSION['email'])){
        
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
                    <div class="form-group col-md-4">
                    <label for="refe1">Référence :</label>
                    <input type="text" name="refe" class="form-control" id="refe1">
                  </div>
                  
                    <div class="form-group col-md-4">
                    <label for="exampleInputPassword1">Estimation de nombre de colis:</label>
                    <input type="number" name="number" value="1" class="form-control" id="exampleInputPassword1">
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
    
                  
          
    $etat='ramassage';
    $type='Livraison';
    
    $etat_lv='En cour d’acheminement';
    
    
    $adress_rmg=$_POST['adress_rmg'];
    $number=$_POST['number'];
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
    
    
       $email = $_SESSION['email'];
    
    $get_vend="select * from vendeurs where email='$email'";
    
    $run_vend=mysqli_query($con ,$get_vend);
    
    $rows=mysqli_fetch_array($run_vend);
    
    $id_vend=$rows['vend_id'];
    
   $insert_demande="insert into demande (etat_dmd,vendeur_id,adress_rmg,number,date_rmg,date_now,type) values ('$etat','$id_vend','$adress_rmg','$number','$date_rmg',Now(),'$type')";
    
    $run_demande=mysqli_query($con,$insert_demande);
    
    $dmd_id = $con->insert_id;
    
    
        
        
 $insert_colis_livre="insert into colis_livre (etat_lv , referance_v , full_name_cl , adress , numero_client , prix , ouvrable , commentaire , id_ville ,dmd_id ) values ('$etat_lv','$refe','$name','$adress_des','$tele','$prix','$ouvrable','$commentaire','$ville','$dmd_id') ";
    
    $run_colis_livre=mysqli_query($con,$insert_colis_livre);
    
             if($run_demande && $run_colis_livre){
                
                
                //     echo"<script>alert('You have been Insert Demande sucessfully')</script>"; 
//      header("location:../forms/nouvelle_ramassage.php");
        echo "<script>window.open('index.php?nouvelle_ramassage','_self')</script>";
   

     }
     
    
       else{
        
         echo "Error: " . $run_demande . "<br>" . $con->error;
    }
    
}


mysqli_close($con);
?>







<?php } ?>
