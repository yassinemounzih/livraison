
<?php 


include("../includes/db.php");

    session_start();
   
?>

<?php

if(isset($_POST['submit'])){
    
    
     $Livreurs='Livreurs';
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass_en=$_POST['pass_en'];
    
    $user_image = $_FILES['file_img']['name'];
    $temp_admin_image = $_FILES['file_img']['tmp_name'];
    
    move_uploaded_file($temp_admin_image,"L_image/$user_image");
      
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
    

    
  
    
   else if($pass == $pass_en){
    
    
   try {
    // First of all, let's begin a transaction
    $con->begin_transaction();
    
    // A set of queries; if one fails, an exception should be thrown
    $con->query("INSERT INTO users(user_name,user_email,user_pass,user_image,user_role) VALUES('$full_name','$email','$pass','$user_image','$Livreurs');");
    $con->query("update users set reference = concat('L',LPAD(last_insert_id(),6,0)) WHERE user_role='Livreurs' AND  user_id=last_insert_id();");

    
    // If we arrive here, it means that no exception was thrown
    // i.e. no query has failed, and we can commit the transaction
    $con->commit();
           
           if($con->commit()){ 
           
            $_SESSION['livreur']=$email;
           
           echo"<script>alert('good')</script>";
           echo "<script>window.open('login.php','_self')</script>";
            
//            die();
//               exit();
          } 
} catch (\Throwable $e) {
    // An exception has been thrown
    // We must rollback the transaction
    $con->rollback();
    throw $e; // but the error must be handled anyway
}
       
       
       
    
        }
    
    else if ($pass !== $pass_en){
        
        
           echo"<script>alert('Email or Password is Wrong ')</script>"; 
       echo "<script>window.open('register.php','_self')</script>";
        
        
    }
    
       else{
        
         echo "Error: " . $run_livreurs . "<br>" . $con->error;
    }
    
}



 if(isset($_POST['login'])){
     
     
        $email = mysqli_real_escape_string($con,$_POST['email']);
        
        $pass = mysqli_real_escape_string($con,$_POST['pass']);
     
        
    $get_livreur=" SELECT * FROM users WHERE user_email='$email' AND user_pass='$pass' AND user_role='Livreurs'";
    
     $run_livreur = mysqli_query($con,$get_livreur);
        
        $count = mysqli_num_rows($run_livreur);
        
        if($count==1){
            
            $_SESSION['livreur']=$email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('../../indexL.php?dashboardLivreur','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
             echo "<script>window.open('login.php','_self')</script>";
        }
     
     
  
     
    }

mysqli_close($con);

?>
