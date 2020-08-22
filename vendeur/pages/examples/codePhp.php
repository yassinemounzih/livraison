
<?php 


include("../includes/db.php");

    session_start();
   
    

?>

<?php

if(isset($_POST['submit'])){
    
    
    
    $Vendeur='Vendeur';
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass_en=$_POST['pass_en'];
 
    
     $user_image = $_FILES['file_img']['name'];
    $temp_admin_image = $_FILES['file_img']['tmp_name'];
    
    move_uploaded_file($temp_admin_image,"v_image/$user_image");
      
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
    

    
  
    
   else if($pass == $pass_en){
    
    
 
       try {
    // First of all, let's begin a transaction
    $con->begin_transaction();
    
    // A set of queries; if one fails, an exception should be thrown
    $con->query("INSERT INTO users(user_name,user_email,user_pass,user_image,user_role) VALUES('$full_name','$email','$pass','$user_image','$Vendeur');");
    $con->query("update users set reference = concat('V',LPAD(last_insert_id(),6,0)) WHERE user_role='Vendeur' AND  user_id=last_insert_id();");

    
    // If we arrive here, it means that no exception was thrown
    // i.e. no query has failed, and we can commit the transaction
    $con->commit();
           
           if($con->commit()){ 
           
            $_SESSION['vendeurs']=$email;
           
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
//      header("location:../forms/nouvelle_ramassage.php");
        echo "<script>window.open('register.php','_self')</script>";
        
        
    }
    
       else{
        
         echo "Error: " . $run_vendeurs . "<br>" . $con->error;
    }
    
}




 if(isset($_POST['login'])){
        
        $email = mysqli_real_escape_string($con,$_POST['email']);
        
        $pass = mysqli_real_escape_string($con,$_POST['pass']);
     
     
     
     
//     $usern = $_POST['username'];
//$passw = $_POST['password'];
$_SESSION['ramasseurs'] = '';
$_SESSION['vendeurs'] = '';

$sql = " SELECT * FROM users WHERE  user_email= '$email' AND user_pass = '$pass' and user_role='Ramasseurs'";
$result = mysqli_query($con, $sql);
if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
        if($row['user_email'] = $email && $row['user_pass'] = $pass){
            $_SESSION['ramasseurs'] = $email;
            header("location: ../../../ramasseur/indexR.php?dashboardRamasseur");
         }
    }
}else{
    $sql1 = " SELECT * FROM users WHERE user_email='$email' AND user_pass='$pass' AND user_role='Vendeur'";
    $result1 = mysqli_query($con, $sql1);
    if($result1->num_rows > 0){
        while($row = $result1->fetch_assoc()){
             if($row['user_email'] = $email && $row['user_pass'] = $pass){
                    $_SESSION['vendeurs'] = $email;
                  header("location: ../../index.php?dashboard");

             }
            
            
            else{
//                    header("location:  login.php");
                 
                   echo "<script>alert('is Wrong !')</script>";
//            
             echo "<script>window.open('login.php','_self')</script>";
             }
        }
    }
     
     
     else{
           
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
             echo "<script>window.open('login.php','_self')</script>";
         
//          die();
//              exit();
         
        }
     
}
     
     
     
     
     
        
//    $get_vendeurs="select * from vendeurs where email='$email' AND pass='$v_pass' ";
//    
//     $run_vendeurs = mysqli_query($con,$get_vendeurs);
//        
//        $count = mysqli_num_rows($run_vendeurs);
//        
//        if($count==1){
//            
//            $_SESSION['email']=$email;
//            
//            echo "<script>alert('Logged in. Welcome Back')</script>";
//            
//            echo "<script>window.open('../../index.php?dashboard','_self')</script>";
//            
//        }else{
//            
//            echo "<script>alert('Email or Password is Wrong !')</script>";
//            
//             echo "<script>window.open('login.php','_self')</script>";
//        }
//        
    }

mysqli_close($con);

?>
