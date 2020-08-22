<?php 

 if(isset($_POST['update'])){
     
     $edit_id=$_POST['update_id'];
     $nom_complet=$_POST['nom_complet'];
     $adress_des=$_POST['adress_des'];
     $ville=$_POST['ville'];
     $tele_id=$_POST['tele'];
     $prix=$_POST['prix'];
     $ouvrable=$_POST['ouvrable'];
     $commentaire=$_POST['commentaire'];
     
     
     
     $get_c="UPDATE colis_livre SET full_name_cl='$nom_complet' , adress='$adress_des' , numero_client='$tele_id' , prix='$prix' , id_ville ='$ville' , ouvrable='$ouvrable' , commentaire='$commentaire' , etat_lv='Demande pour changer le destinataire' where id_livre ='$edit_id'";
     
     $run_edit=mysqli_query($con,$get_c);
     
   
     
    if($run_edit){
        
              echo "<script>alert('Your demande has ben ubdate')</script>";
            
            echo "<script>window.open('index.php?En_Cours_de_livraison','_self')</script>";
    }

  
    
 }



?>



 