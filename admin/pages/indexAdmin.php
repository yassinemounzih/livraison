

<?php 

session_start();
include("includes/db.php");



   if(!isset($_SESSION['admin'])){
        
        echo "<script>window.open('examples/login.php','_self')</script>";
        
    }else{
       
       

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
   <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  
    <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
    <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  
  
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  
   <style>
    
       #btn>a>button{
           
           margin-bottom: 15px;
           margin-right: 10px;
       }
    
    </style>



</head>
<body class="hold-transition sidebar-mini sidebar-collapse">


<div class="wrapper">
 <!-- Navbar -->
 


 <?php 
    
    include("includes/sidebarAdmin.php");
    
    ?>
        



         <?php
                
              
       
       
       
      

                 if(isset($_GET['demande_stock'])){
                        
                        include("tables_admin/demande_stock.php");
                        
                }
       
               if(isset($_GET['nouvelle_ramassage'])){
                        
                        include("tables_admin/nouvelle_ramassage.php");
                        
                }
                
                   
                         if(isset($_GET['bring'])){
                        
                        include("tables_admin/bring.php");
                        
                }
                   
                    if(isset($_GET['no_ramasse'])){
                        
                        include("tables_admin/no_ramasse.php");
                        
                }
       
            if(isset($_GET['ramasse'])){
                        
                        include("tables_admin/ramasse.php");
                        
                }
                
           if(isset($_GET['verifier_colis_livree'])){
                        
                        include("tables_admin/verifier_colis_livree.php");
                        
                } 
       
                     if(isset($_GET['verifier_colis_stock'])){
                        
                        include("tables_admin/verifier_colis_stock.php");
                        
                }
       
         if(isset($_GET['colis'])){
                        
                        include("tables_admin/colis_livraison.php");
                        
                }
       
       
           if(isset($_GET['verification'])){
                        
                        include("tables_admin/edit.php");
                        
                }
       
         if(isset($_GET['verification_Stock'])){
                        
                        include("tables_admin/edit.php");
                        
                }
       
       
       
           if(isset($_GET['new_colis'])){
                        
                        include("tables_livrison/new_colis.php");
                        
                }
       
        if(isset($_GET['ColisAffectes'])){
                        
                        include("tables_livrison/ColisAffectes.php");
                        
                }
       if(isset($_GET['Reçu_parAS'])){
                        
                        include("tables_livrison/Reçu_parAS.php");
                        
                }
         if(isset($_GET['Package'])){
                        
                        include("tables_livrison/Package.php");
                        
                }
       
             if(isset($_GET['colis_acheminement'])){
                        
                        include("tables_livrison/edit.php");
                        
                }
                 
                  if(isset($_GET['En_acheminement'])){
                        
                        include("tables_livrison/En_acheminement.php");
                        
                } 
       
            if(isset($_GET['En_Cours_de_livraison'])){
                        
                        include("tables_livrison/En_Cours_de_livraison.php");
                        
                }
      
       
       
       
       
        if(isset($_GET['Retours_Envoyés'])){
                        
                        include("tables_livrison/Retours_Envoyés.php");
                        
                }
        
            
            
                if(isset($_GET['colis_Retours_Envoyés'])){
                        
                        include("tables_livrison/edit.php");
                        
                }
            
            
         if(isset($_GET['Colis_retour_reçu_par_MPacket'])){
                        
                        include("tables_livrison/edit.php");
                        
                }
       
       
       
        if(isset($_GET['Retours_Reçus_par_Mpacket'])){
                        
                        include("tables_livrison/Retours_Reçus_par_Mpacket.php");
                        
                }
          
       
       
         if(isset($_GET['Livrée'])){
                        
                        include("tables_livrison/Livrée.php");
                        
                }
       
        if(isset($_GET['Annulée'])){
                        
                        include("tables_livrison/Annulée.php");
                        
                }
       
         if(isset($_GET['Chargement_Destinataire'])){
                        
                        include("tables_livrison/Chargement_Destinataire.php");
                        
                }
       
          if(isset($_GET['Demendes_Retour'])){
                        
                        include("tables_livrison/Demendes_Retour.php");
                        
                }
         if(isset($_GET['VzrificationColis'])){
                        
                        include("tables_admin/VerificationColis.php");
                        
                } 
       
             
              if(isset($_GET['livraison_au_stock'])){
                        
                        include("tables_admin/livraison_au_stock.php");
                        
                }
             
                if(isset($_GET['demande_vérifier'])){
                        
                        include("tables_admin/demande_vérifier.php");
                        
                }
        ?>






 <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->







<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script><!-- AdminLTE App -->

<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>


<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
      
        });

</script>

 

</body>
</html>



<?php } ?>
