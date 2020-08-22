

<?php 

    if(isset($_GET['verification'])){
        
        $edit = $_GET['verification'];
        
        
        
       $update = "UPDATE demande,colis_livre
    SET demande.etat_dmd = 'vérifier',
        colis_livre.etat_lv = 'Reçu par MPacket'
    WHERE demande.type='Livraison'   AND demande.dmd_id ='$edit' AND colis_livre.dmd_id='$edit'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            
            echo "<script>alert('Your demande has ben Vérifier')</script>";
            
            echo "<script>window.open('indexAdmin.php?verifier_colis_livree','_self')</script>";
            
        }
        
        
        
    }

?>







<?php 

    if(isset($_GET['verification_Stock'])){
        
        $edit_stc = $_GET['verification_Stock'];
        
        
        
       $update = "UPDATE demande SET demande.etat_dmd = 'vérifier' WHERE demande.type='stocké'  AND  demande.dmd_id ='$edit_stc'";
        
        $run_update = mysqli_query($con,$update);
        
        if($run_update){
            
            
            echo "<script>alert('Your demande has ben Vérifier')</script>";
            
            echo "<script>window.open('indexAdmin.php?verifier_colis_stock','_self')</script>";
            
        }
        
        
        
    }

?>
