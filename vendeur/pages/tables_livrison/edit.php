
<?php 

    if(isset($_GET['En_Coursdelivraison'])){
        
        $edit = $_GET['En_Coursdelivraison'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='En Cours de livraison'
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben En Cours de livraison')</script>";
            
            echo "<script>window.open('index.php?En_Cours_de_livraison','_self')</script>";
            
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
            
            echo "<script>window.open('index.php?Livrée','_self')</script>";
            
        }
        
    }  

?>


<?php 

    if(isset($_GET['Colis_Annulé'])){
        
        $edit = $_GET['Colis_Annulé'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Annulé , attente changement destinataire'
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your demande has ben Livrée')</script>";
            
            echo "<script>window.open('index.php?Annulé','_self')</script>";
            
        }
        
    }

?>




<?php 

    if(isset($_GET['Refuser_par_client'])){
        
        $edit = $_GET['Refuser_par_client'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Refuser par client'
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your Colis has ben Refuser par client')</script>";
            
            echo "<script>window.open('index.php?Annulée','_self')</script>";
            
        }
        
    }

?>






<?php 

    if(isset($_GET['Colis_Demande_retour'])){
        
        $edit = $_GET['Colis_Demande_retour'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Annulé, demande de retour'
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your Colis has ben demande de retour')</script>";
            
            echo "<script>window.open('index.php?demande_de_retour','_self')</script>";
            
        }
        
    }

?>






<?php 

    if(isset($_GET['Colis_changer_le_destinataire'])){
        
        $edit = $_GET['Colis_changer_le_destinataire'];
        
        
        
       $update = "UPDATE colis_livre
    SET colis_livre.etat_lv='Demande pour changer le destinataire'
    WHERE colis_livre.id_livre ='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            echo "<script>alert('Your Colis has ben Refuser par client')</script>";
            
            echo "<script>window.open('index.php?Annulée','_self')</script>";
            
        }
        
    }

?>





















