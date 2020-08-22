

<?php 

session_start();
include("includes/db.php");



    if(!isset($_SESSION['livreur'])){
        
        echo "<script>window.open('pages/examplesLivreur/login.php','_self')</script>";
        
    }else{
        
       
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

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
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
 <!-- Navbar -->
 


 <?php 
    
    include("includes/sidebarLivreur.php");
    
    ?>
        



         <?php
                
    
       
              if(isset($_GET['Reçu_parAS'])){
                        
                        include("tablesLivreur/Reçu_parAS.php");
                        
                }
           if(isset($_GET['En_acheminement'])){
                        
                        include("tablesLivreur/En_acheminement.php");
                        
                }
        
            if(isset($_GET['En_Coursdelivraison'])){
                        
                        include("tablesLivreur/edit.php");
                        
                }
        
           if(isset($_GET['En_Cours_de_livraison'])){
                        
                        include("tablesLivreur/En_Cours_de_livraison.php");
                        
                }
        
        
           if(isset($_GET['Livrée'])){
                        
                        include("tablesLivreur/Livrée.php");
                        
                }
        
        
           if(isset($_GET['Colis_Livrée'])){
                        
                        include("tablesLivreur/edit.php");
                        
                }
        
         if(isset($_GET['Annulée'])){
                        
                        include("tablesLivreur/Annulée.php");
                        
                }
        
         if(isset($_GET['Colis_Annulé'])){
                        
                        include("tablesLivreur/edit.php");
                        
                }
        
           if(isset($_GET['Refuser_par_client'])){
                        
                        include("tablesLivreur/edit.php");
                        
                }
           
           if(isset($_GET['Chargement_Destinataire'])){
                        
                        include("tablesLivreur/Chargement_Destinataire.php");
                        
                }
        
            
              if(isset($_GET['Demendes_Retour'])){
                        
                        include("tablesLivreur/Demendes_Retour.php");
                        
                }
        
          if(isset($_GET['Retours_Envoyés'])){
                        
                        include("tablesLivreur/Retours_Envoyés.php");
                        
                }
        
             if(isset($_GET['Retours_Reçus_par_Mpacket'])){
                        
                        include("tablesLivreur/Retours_Reçus_par_Mpacket.php");
                        
                }
        
                 
          if(isset($_GET['terminées'])){
                        
                        include("tablesLivreur/terminées.php");
                        
                }
        
        
               
          if(isset($_GET['colis_Retours_Envoyés'])){
                        
                        include("tablesLivreur/edit.php");
                        
                }
        
         if(isset($_GET['colis_accepte'])){
                        
                        include("tablesLivreur/edit.php");
                        
                }
        
        
         if(isset($_GET['Colis_demande_retour'])){
                        
                        include("tablesLivreur/edit.php");
                        
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
