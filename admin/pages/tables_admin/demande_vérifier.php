
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ramassages pas Effectués</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         

            <div class="card">
            
             <form method="post" id="update">

             
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                
                <div class="col-md-3 float-right">
                   <input type="hidden" name="objr" id="objr" value="">
                              
 <input type="button" onclick="myFunction();" name="submitbtn" id="btn" class="btn btn-info" value="Multiple Update" />                   
                    </div>  
                
              </div>
              <!-- /.card-header -->
                   

           
                    <br />
              
              <div class="card-body">
               
                                  <div class="text-center" id="btn">
                 
        <a href="indexAdmin.php?livraison_au_stock"><button type="button"  class="btn btn-outline-primary">Livraison a partir au Stock <span class="badge badge-danger right">0</span> </button></a> 
                 
                  <a href="indexAdmin.php?demande_vérifier"><button type="button"  class="btn btn-primary"> Les Demande Livraisons (Vérifier) <span class="badge badge-danger right">0</span> </button></a>
               
               </div>
               <br>
                <table id="example1" class="table table-bordered table-striped">
                 
           
                  <thead>    
                     <tr>
                    <th hidden>ID: </th>
                    <th width="5%">ID: </th>
                    <th width="20%">Code: </th>
                    <th width="10%">Vendeur: </th>
                    <th width="30%">Destinataire: </th>
                    <th width="30%">Details: </th>
                    <th width="15%">Etat: </th>
                    <th width="10%">Remarques: </th>
                    <th width="10%">Livreurs: </th>
                    
                 
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                  <?php
                      
                      $get_demande="SELECT * FROM demande , vendeurs , colis_livre WHERE vendeurs.vend_id=demande.vendeur_id AND demande.dmd_id=colis_livre.dmd_id  AND demande.etat_dmd='vérifier' AND colis_livre.etat_lv='Reçu par MPacket' AND colis_livre.livreur_id IS null";
                      $run=mysqli_query($con,$get_demande);
                      $i=0;
                      while($rows=mysqli_fetch_array($run)){
                            
                        
                       $id_livre  =$rows['id_livre'];
                       $full_name  =$rows['full_name'];
                       $etat =$rows['etat_lv'];
                            
                       $referance_v =$rows['referance_v'];
                       $full_name_cl=$rows['full_name_cl'];
                       $adress=$rows['adress'];
                       $numero_client=$rows['numero_client'];
                     
                       $prix=$rows['prix'];
                       $ouvrable=$rows['ouvrable'];
                       $commentaire=$rows['commentaire'];
                       $id_ville=$rows['id_ville'];
                       $data_liv=$rows['data_liv'];
                     $code_bar=$rows['code_bar'];
                          
                        
                        $select_ville="select * from villes where ville_id ='$id_ville' ";
                        $run_vill=mysqli_query($con,$select_ville);
                        $rows_vill=mysqli_fetch_array($run_vill);
                        $ville_name=$rows_vill['ville_name'];
                        
                        
                        $i++;
                      ?>
                  
                  
                  
                  <tr>

                    <td hidden><?php echo $id_livre; ?></td>
                    <td><?php echo $i; ?></td>
                     <td><a href=""><?php echo $code_bar; ?></a></td>
                    <td><?php echo $full_name; ?></td>
                    
                    <td>
                        
                          <ul>
                       <li>Référence : <?php echo $referance_v; ?></li>
                       <li><?php echo $full_name_cl; ?></li>
                        <li><?php echo $adress; ?></li>
                        <li><?php echo $ville_name; ?></li>
                        <li><?php echo $numero_client; ?></li>
                        </ul>
                        
                        
                    </td>
                    
                    
                    <td>
                        
                         <ul>
                       <li>Valeur: <?php echo $prix; ?> DH</li>
                       <li>C.R. ? : oui</li>
                        <li>Ouvrable ? : <?php echo $ouvrable; ?></li>
                        <li>Date <?php echo $data_liv; ?></li>
                        <li>Commentaire : <?php echo $commentaire; ?></li>
                        </ul>
                        
                    </td>
                    <td></td>
                    
                    <td></td>
                                  <td>
   <select  name="livreur" id="r" width="144" style="height:19px; width:150px; padding-top:-10px;">
       <option selected disabled >Select..</option>
                 <?php 
                              
                              $getL = "select * from livreurs";
                              $runL = mysqli_query($con,$getL);
                              
                              while ($rowL=mysqli_fetch_array($runL)){
                                  
                                  $livreur_id = $rowL['livreur_id'];
                                  $nameL = $rowL['livreur_name'];
                                  
                                  echo "
                                  
                                  <option class='row_value' value='$livreur_id'> $nameL </option>
                                  
                                  ";   
                              }
                              ?>
   </select>
  </td>
              

                    
                    
                    
                    
                    
                    
                    
                    

              
                   
                  </tr>
          <?php } ?>
                  </tbody>
                      
               
                  <tfoot>
                  <tr>
                   
                    <th hidden>ID: </th>
                    <th width="5%">ID: </th>
                    <th width="20%">Code: </th>
                    <th width="10%">Vendeur: </th>
                    <th width="30%">Destinataire: </th>
                    <th width="30%">Details: </th>
                    <th width="15%">Etat: </th>
                    <th width="10%">Remarques: </th>
                    <th width="10%">Livreurs: </th>
                    
                 
                  </tr>
                  </tfoot>
                </table>
                
                
              </div>
              <!-- /.card-body -->
              
              </form>


           
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
                      <?php
if(isset($_POST['objr'])){

    $values = json_decode($_POST['objr']);
       
      
       if (is_array($values) || is_object($values))
{
    foreach ($values as $value)
    {
        
     
    $value->idd;
        
    $value->idr;
        
  
        
        $query = " UPDATE colis_livre   SET  colis_livre.livreur_id= $value->idr , colis_livre.etat_lv='Reçu par MPacket' WHERE colis_livre.id_livre  =  $value->idd   ";
        
        $run=mysqli_query($con , $query);
        
        if($run){
            
            echo" <script>alert('ok')</script> ";
             echo "<script>window.open('indexAdmin.php?Reçu_parAS','_self')</script>";
            
        }
        
      
        
        
    }
}
}
         
         
         
     
       
     ?>  
           
 
 <script>
    
        function myFunction() {
   var btn = document.getElementById('btn');
    var objr = document.getElementById('objr');
    
    var ids = [];
        
     var tbl = document.getElementById('example1');
        
        for (var i = 1; i < tbl.rows.length-1 ;i++) {
            
            var ramasid=tbl.rows[i].cells[8].getElementsByTagName("select")[0].value;
            var iddmd=tbl.rows[i].cells[0].textContent;

            if(ramasid!=="Select.."){
                
                var dmdr = {};
                dmdr["idd"] = iddmd;
                dmdr["idr"] =ramasid;
                
                
            ids.push(dmdr);
                
              
                
            }
            

        }
         

          objr.value=JSON.stringify(ids);
       document.forms["update"].submit(); 
}
    



</script>



































