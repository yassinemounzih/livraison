
<?php 


include("../includes/db.php");

    session_start();
   
?>

<?php


 if(isset($_POST['login'])){
     
     
        $email = mysqli_real_escape_string($con,$_POST['email']);
        
        $pass = mysqli_real_escape_string($con,$_POST['pass']);
     
        
    $get_admin="SELECT * FROM users WHERE  user_email= '$email' AND user_pass = '$pass' and user_role='Admins'";
    
     $run_admin = mysqli_query($con,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin']=$email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('../../indexA.php?dashboardAdmin','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
             echo "<script>window.open('login.php','_self')</script>";
        }
     
     
  
     
    }

mysqli_close($con);

?>
