

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
              <div class="card-header center">
                <h3 class="card-title">Nouvelle demande de ramassage :</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?nouvelle_ramassage"  method="post" enctype="multipart/form-data">
               
                <div class="card-body">
                
               
                
               <div class="form-group">
                <label for="inputDescription">Adresse de ramassage et remarques:</label>
                <textarea id="inputDescription" name="adress_rmg" class="form-control" rows="3"></textarea>
              </div>
                  <div class="form-group">
                    <label for="nbr1">Estimation de nombre de colis:</label>
                    <input type="number" name="number" class="form-control" id="nbr1">
                  </div>
                     
                     
                      <div class="form-group">
                    <label for="date1">Date de ramassage:</label>
                    <input type="date" name="date_rmg" class="form-control" id="date1">
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
    
                  
          
    $etat='indisponible';
    $type='stocké';
    $adress_rmg=$_POST['adress_rmg'];
    $number=$_POST['number'];
    $date_rmg=$_POST['date_rmg'];
    
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
    
    if($run_demande){
        
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
