
<?php 

    if(isset($_GET['En_Coursdelivraison'])){
        
        $edit = $_GET['En_Coursdelivraison'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='En Cours de livraison' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben En Cours de livraison')</script>";
            
            echo "<script>window.open('indexLivreur.php?En_Cours_de_livraison','_self')</script>";
            
        }
        
    }

?>


<?php 

    if(isset($_GET['Colis_Livrée'])){
        
        $edit = $_GET['Colis_Livrée'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Livré' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben Livrée')</script>";
            
            echo "<script>window.open('indexLivreur.php?Livrée','_self')</script>";
            
        }
        
    }  

?>


<?php 

    if(isset($_GET['Colis_Annulé'])){
        
        $edit = $_GET['Colis_Annulé'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Annulé , attente changement destinataire' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben Livrée')</script>";
            
            echo "<script>window.open('indexLivreur.php?Annulée','_self')</script>";
            
        }
        
    }

?>




<?php 

    if(isset($_GET['Refuser_par_client'])){
        
        $edit = $_GET['Refuser_par_client'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Refuser par client' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your Colis has ben Refuser par client')</script>";
            
            echo "<script>window.open('indexLivreur.php?Annulée','_self')</script>";
            
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
            
            echo "<script>alert('Your Colis has ben Retours ')</script>";
            
            echo "<script>window.open('indexLivreur.php?Retours_Envoyés','_self')</script>";
            
        }
        
    }

?>









?>


<?php 

    if(isset($_GET['colis_accepte'])){
        
        $edit = $_GET['colis_accepte'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='En Cours de livraison' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your Colis has ben Accepte ')</script>";
            
            echo "<script>window.open('indexLivreur.php?En_Cours_de_livraison','_self')</script>";
            
        }
        
    }

?>

 
  <?php 

    if(isset($_GET['Colis_demande_retour'])){
        
        $edit = $_GET['Colis_demande_retour'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Annulé, demande de retour' , date_livré=NOW()
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your Colis has ben Accepte ')</script>";
            
            echo "<script>window.open('indexLivreur.php?Demendes_Retour','_self')</script>";
            
        }
        
    }

?>
    