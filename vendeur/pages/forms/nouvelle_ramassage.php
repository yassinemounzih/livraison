

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
            <h1>Demandes de Ramassage au Stocke </h1>
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
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header text-center">
              
                
                                <div>
                 
                                        
        <a href="index.php?nouvelle_ramassage"><button type="button"  class="btn btn-danger">Ajouter une Demande de Ramassages  </button></a> 
               
               <a href="index.php?ramassages_pas_effectues_stock"><button type="button"  class="btn btn-danger">Mes Demandes de Ramassages  <span class="badge badge-primary right">0</span></button></a>
             
    
               
               </div>
                
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?nouvelle_ramassage"  method="post" enctype="multipart/form-data">
               
                <div class="card-body">
                
               
                
                      <div class="form-group">
                    <label for="ref">Référence:</label>
                    <input type="text" name="refe" class="form-control" id="ref">
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
                    <input type="date" name="date_rmg" class="form-control" id="date1">
                  </div>
                     
                     
                        <div class="form-group">
                <label for="inputDescription">Adresse de ramassage et remarques:</label>
                <textarea id="inputDescription" name="adress_rmg" class="form-control" rows="3"></textarea>
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
    
                  
          
    $etat='Nouvelle Demande';
    $type='stock';
    
    
    $adress_rmg=$_POST['adress_rmg'];
    $refe=$_POST['refe'];
    $number=$_POST['number'];
    $typeColis=$_POST['typeColis'];
    $date_rmg=$_POST['date_rmg'];
    $typeColis=$_POST['typeColis'];
    
//    $now=date('Y-m-d h:i:s');
    
      
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
    
    
       $email = $_SESSION['vendeurs'];
    
    $get_vend="select * from users where user_role='Vendeur' and user_email='$email'";
    
    $run_vend=mysqli_query($con ,$get_vend);
    
    $rows=mysqli_fetch_array($run_vend);
    
    $id_vend=$rows['user_id'];
    
    
      try {
  
         // First of all, let's begin a transaction
    $con->begin_transaction();
    
    
   $con->query("insert into demande (etat_dmd,adress_rmg,number,date_rmg,date_now,type,type_colis,reference_demande,user_id_vend) values ('$etat','$adress_rmg','$number','$date_rmg',Now(),'$type','$typeColis','$refe','$id_vend');");
    
   
    
    
      $con->query("insert into colis_stock (reference,type_colis_stock,total_colis,colis_sortant,colis_reste,date_stockage,dmd_id) values ('$refe','$typeColis','$number','0','$number',Now(),last_insert_id());");
    
    $con->query("update colis_stock set psodo = concat('AS',LPAD(last_insert_id(),11,0)) WHERE id_stock =last_insert_id();");
    
    
    
    
         
         $con->commit();
             if($con->commit()){
                
                
                 echo"<script>alert('You have been Insert Demande sucessfully')</script>"; 
//      header("location:../forms/nouvelle_ramassage.php");
//        echo "<script>window.open('index.php?mes_demandes_livraison','_self')</script>";
   

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
