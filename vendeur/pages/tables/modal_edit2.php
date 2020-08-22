<?php 

 if(isset($_POST['update'])){
     
     
     $edit_id=$_POST['update_id'];
     $edit_id4=$_POST['update_id4'];
    $adress_rmg=$_POST['adress_rmg'];
    $refe=$_POST['refe'];
    $number=$_POST['number'];
    $typeColis=$_POST['typeColis'];
    $date_rmg=$_POST['date_rmg'];
    
     
     
     
     $get_c="UPDATE colis_stock , demande SET demande.type_colis='$typeColis' , demande.reference_demande='$refe' ,  colis_stock.reference='$refe' , colis_stock.type_colis_stock='$typeColis' , colis_stock.colis_reste='$number',colis_stock.total_colis='$number' , demande.adress_rmg='$adress_rmg' ,  demande.number ='$number' , demande.date_rmg='$date_rmg'  where colis_stock.id_stock='$edit_id4' and demande.dmd_id='$edit_id'";
     
     $run_edit=mysqli_query($con,$get_c);
     
   
     
    if($run_edit){
        
              echo "<script>alert('Your demande has ben ubdate')</script>";
            
            echo "<script>window.open('index.php?ramassages_pas_effectues_stock','_self')</script>";
        
    }

  
    
 }



?>



 