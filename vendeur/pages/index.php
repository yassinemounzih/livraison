

<?php 

session_start();
include("includes/db.php");



   if(!isset($_SESSION['vendeurs'])){
        
        echo "<script>window.open('examples/login.php','_self')</script>";
        
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
    
    include("includes/sidebar.php");
    
    ?>
        



         <?php    
                
                    if(isset($_GET['ramassages_pas_effectues'])){
                        
                        include("tables/ramassages_pas_effectues.php");
                        
                }
       
       
        if(isset($_GET['ramassages_pas_effectues_stock'])){
                        
                        include("tables/ramassages_pas_effectues_stock.php");
                        
                }
       
          if(isset($_GET['ramassages_effectues_stock'])){
                        
                        include("tables/ramassages_effectues_stock.php");
                        
                }
       
       
                 if(isset($_GET['ramassages_effectues'])){
                        
                        include("tables/ramassages_effectues.php");
                        
                }
       
          if(isset($_GET['livre_en_stock'])){
                        
                        include("tables/livre_en_stock.php");
                        
                }
       
       
            if(isset($_GET['nouvelle_ramassage'])){
                        
                        include("forms/nouvelle_ramassage.php");
                        
                } 
       
      

                 if(isset($_GET['nouvelle_livraison'])){
                        
                        include("forms/nouvelle_livraison.php");
                        
                }
      
                 if(isset($_GET['mes_demandes_livraison'])){
                        
                        include("tables/mes_demandes_livraison.php");
                        
                }
            if(isset($_GET['plus_livraison1'])){
                        
                        include("forms/plus_livraison1.php");
                        
                }
       
          if(isset($_GET['plus_livraison2'])){
                        
                        include("forms/plus_livraison2.php");
                        
                }
       
           if(isset($_GET['Reçu_parAS'])){
                        
                        include("tables_livrison/Reçu_parAS.php");
                        
                }
       
         if(isset($_GET['En_acheminement'])){
                        
                        include("tables_livrison/En_acheminement.php");
                        
                }
       
          if(isset($_GET['En_Cours_de_livraison'])){
                        
                        include("tables_livrison/En_Cours_de_livraison.php");
                        
                }
       
       
                 if(isset($_GET['Livrée'])){
                        
                        include("tables_livrison/Livrée.php");
                        
                }
       
           if(isset($_GET['Annulée'])){
                        
                        include("tables_livrison/Annulée.php");
                        
                }
       
       if(isset($_GET['Colis_Demande_retour'])){
                        
                        include("tables_livrison/edit.php");
                        
                }
       
           
           if(isset($_GET['Demendes_Retour'])){
                        
                        include("tables_livrison/demande_de_retour.php");
                        
                }
       
       
          if(isset($_GET['Chargement_Destinataire'])){
                        
                        include("tables_livrison/Chargement_Destinataire.php");
                        
                }
           
       
         if(isset($_GET['modal_edit'])){
                        
                        include("tables_livrison/modal_edit.php");
                        
                }
           
       
         if(isset($_GET['modal_edit2'])){
                        
                        include("tables/modal_edit2.php");
                        
                }
       
       
           if(isset($_GET['Retours_Envoyés'])){
                        
                        include("tables_livrison/Retours_Envoyés.php");
                        
                }
       
                  if(isset($_GET['Retours_Reçus_par_Mpacket'])){
                        
                        include("tables_livrison/Retours_Reçus_par_Mpacket.php");
                        
                }
       
           if(isset($_GET['colis'])){
                        
                        include("tables/colis.php");
                        
                } 
       
          if(isset($_GET['mes_demandes_livraison_stock'])){
                        
                        include("tables/mes_demandes_livraison_stock.php");
                        
                }
           
                  if(isset($_GET['modal_livraison'])){
                        
                        include("tables/modal_livraison.php");
                        
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
$(document).ready(function(){
    
    $(".editbtn").on('click',function(){
        
        $('#modal-lg').modal('show');
        
        
        $tr=$(this).closest('tr');
        
        var data=$tr.children('td').map(function(){
            
           return $(this).text();
            
            
        }).get();
        
        console.log(data);
        
        $('#update_id').val(data[0]);
        $('#ref').val(data[2]);
        
        
    
    });
    
        $(".LivBtn").on('click',function(){
        
        $('#modal-lg2').modal('show');
        
        
        $tr=$(this).closest('tr');
        
        var data=$tr.children('td').map(function(){
            
           return $(this).text();
            
            
        }).get();
        
        console.log(data);
        
        $('#insert_id2').val(data[0]);
        
        
        
    
    });
    
    
            $(".editBtn3").on('click',function(){
        
        $('#modal-lg3').modal('show');
        
        
        $tr=$(this).closest('tr');
        
        var data=$tr.children('td').map(function(){
            
           return $(this).text();
            
            
        }).get();
        
        console.log(data);
        
        $('#update_id3').val(data[0]);
        $('#update_id4').val(data[1]);
                 
        
        
        
    
    });
    
    
}); 
                  
                


</script>



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
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

</script>

</body>
</html>



<?php } ?>
