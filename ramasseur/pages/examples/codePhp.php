
<?php 


include("../includes/db.php");

    session_start();
   
    

?>

<?php

if(isset($_POST['submit'])){
    
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass_en=$_POST['pass_en'];
    

      
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
    

    
  
    
   else if($pass == $pass_en){
    
    
   $insert_vendeurs="insert into vendeurs (full_name,email,pass) values ('$full_name','$email','$pass')";
    
    $run_vendeurs=mysqli_query($con,$insert_vendeurs);
    
    if($run_vendeurs){
        
        $_SESSION['email']=$email;
        
   echo"<script>alert('You have been Registered Sucessfully')</script>"; 
//      header("location:../forms/nouvelle_ramassage.php");
        echo "<script>window.open('../forms/nouvelle_ramassage.php','_self')</script>";
        
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
$_SESSION['email'] = '';

$sql = " SELECT * FROM ramasseurs WHERE  email_ramasseur= '$email' AND pass_ramasseur = '$pass'";
$result = mysqli_query($con, $sql);
if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
        if($row['email_ramasseur'] = $email && $row['pass_ramasseur'] = $pass){
            $_SESSION['ramasseurs'] = $email;
            header("location: ../../indexR.php?dashboardRamasseur");
         }
    }
}else{
    $sql1 = " SELECT * FROM vendeurs WHERE email='$email' AND pass='$pass'";
    $result1 = mysqli_query($con, $sql1);
    if($result1->num_rows > 0){
        while($row = $result1->fetch_assoc()){
             if($row['email'] = $email && $row['pass'] = $pass){
                    $_SESSION['email'] = $email;
                    header("location: ../../index.php?dashboard");
             }
            
            
//            else{
////                    header("location:  login.php");
//                 
//                   echo "<script>alert('Email or Password is Wrong !')</script>";
////            
////             echo "<script>window.open('login.php','_self')</script>";
//             }
        }
    }
     
     
     else{
//            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
             echo "<script>window.open('login.php','_self')</script>";
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
