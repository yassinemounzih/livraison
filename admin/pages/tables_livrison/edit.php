
<?php 

    if(isset($_GET['colis_acheminement'])){
        
        $edit = $_GET['colis_acheminement'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='En acheminement' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben En acheminement')</script>";
            
            echo "<script>window.open('indexAdmin.php?En_acheminement','_self')</script>";
            
        }
        
    }

?>


<?php 

    if(isset($_GET['Colis_retour_reçu_par_MPacket'])){
        
        $edit = $_GET['Colis_retour_reçu_par_MPacket'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Annulé, retour reçu par MPacket' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben  retour reçu par MPacket')</script>";
            
            echo "<script>window.open('indexAdmin.php?Retours_Reçus_par_Mpacket','_self')</script>";
            
        }
        
    }

?>


<?php 

    if(isset($_GET['colis_Retours_Envoyés'])){
        
        $edit = $_GET['colis_Retours_Envoyés'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Annulé , Retours Envoyés' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben  retour reçu par MPacket')</script>";
            
            echo "<script>window.open('indexAdmin.php?Retours_Reçus_par_Mpacket','_self')</script>";
            
        }
        
    }

?>