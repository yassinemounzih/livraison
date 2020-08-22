
<?php 

   
    
    if(!isset($_SESSION['ramasseurs'])){
        
        echo "<script>window.open('pages/examples/login.php','_self')</script>";
        
    }else{
?>

<?php 

    if(isset($_GET['ramasse'])){
        
        $edit = $_GET['ramasse'];
        
        $etat='ramasse';
        
       $update = "update demande set etat_dmd='$etat' , dateR_now=NOW() where dmd_id='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben ramase')</script>";
            
            echo "<script>window.open('indexR.php?ramassages_pas_eff','_self')</script>";
            
        }
        
    }

?>




<?php } ?>