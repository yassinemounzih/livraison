<?php 

 if(isset($_POST['insert'])){
     
     $insert_id=$_POST['insert_id2'];
     
     $etat_lv='En Attente de validation';
     
     $nom_complet=$_POST['nom_complet'];
     $refe=$_POST['refe'];
     $adress_des=$_POST['adress_des'];
     $ville=$_POST['ville'];
     $tele=$_POST['tele'];
     $prix=$_POST['prix'];
     $ouvrable=$_POST['ouvrable'];
     $commentaire=$_POST['commentaire'];
     
     
     
      
  try {
    // First of all, let's begin a transaction
    $con->begin_transaction();
    

    
   $con->query("insert into colis_livre (etat_lv , referance_v , full_name_cl , adress , numero_client , prix , ouvrable , commentaire ,id_stock , id_ville ,data_liv) values('$etat_lv','$refe','$nom_complet','$adress_des','$tele','$prix','$ouvrable','$commentaire','$insert_id','$ville',NOW());");
      $con->query("update colis_livre set code_bar = concat('AS',LPAD(last_insert_id(),11,0)) WHERE id_livre =last_insert_id();");
    
     $con->commit();
    

             if($con->commit()){
                
                
                //     echo"<script>alert('You have been Insert Demande sucessfully')</script>"; 
//      header("location:../forms/nouvelle_ramassage.php");
//        echo "<script>window.open('index.php?livre_en_stock','_self')</script>";
   

     }
     
    
} catch (\Throwable $e) {
    // An exception has been thrown
    // We must rollback the transaction
    $con->rollback();
    throw $e; // but the error must be handled anyway
}
    mysqli_close($con);
}




?>



 