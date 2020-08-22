
  
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
                              
 <input type="button" name="submitbtn" id="btn" class="btn btn-info" value="Multiple Update" />                   
                    </div>  
                
              </div>
              <!-- /.card-header -->
                   

           
                    <br />
              
              <div class="card-body">
               
             <div>
                 <a href="indexAdmin.php?nouvelle_ramassage"><button type="button"  class="btn btn-outline-primary">Nouvelle Demande  <span class="badge badge-danger right">0</span> </button></a> 
                  <a href="indexAdmin.php?no_ramasse"><button type="button"  class="btn btn-outline-primary">Demande no ramassé <span class="badge badge-danger right">0</span> </button></a> 
                <a href="indexAdmin.php?ramasse"><button type="button"  class="btn btn-outline-primary"> Demande ramassé <span class="badge badge-danger right">0</span> </button></a> 
               <a href="indexAdmin.php?verifier"><button type="button"  class="btn btn-outline-primary">Demande vérifier <span class="badge badge-danger right">0</span></button></a>
              
               
             
               
               </div> <br>
               
                <table id="example1" class="table table-bordered table-striped">
                 
           
                  <thead>    
                  <tr>
                   
                    <th hidden> </th>
                    <th>ID: </th>
                    <th>name vendeur: </th>
                    <th>Heure demande: </th>
                    <th>date de ramassage: </th>
                    <th>Estimation nomber colis: </th>
                    <th>adresse: </th>
                    <th>type: </th>
                    <th>Ramasseur: </th>
                    
                   
                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                  <?php
                      
                      $get_demande="SELECT * FROM demande , users WHERE users.user_id=demande.user_id_vend AND demande.user_id_ram is null";
                      $run_demande=mysqli_query($con,$get_demande);
                      $i=0;
                      while($rows=mysqli_fetch_array($run_demande)){
                          
                      $demande_id=$rows['dmd_id'];

                      $date_now=$rows['date_now'];
                      $date_rmg=$rows['date_rmg'];
                      $number=$rows['number'];
                      $adress_rmg=$rows['adress_rmg'];
                      $full_name=$rows['user_name'];
                      $type=$rows['type'];
                      
                          
                          $i++;
                      ?>
                  
                  
                  
                  <tr>
                   <td hidden><?php echo $demande_id ; ?></td>

                    <td><?php echo $i; ?></td>
                    <td><?php echo $full_name; ?></td>
                    <td><?php echo $date_now; ?></td>
                    <td><?php echo $date_rmg; ?></td>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $adress_rmg; ?></td>
                    <td><?php echo $type; ?></td>
                    <td>
   <select  name="ramasseur" id="s" width="144" style="height:19px; width:150px; padding-top:-10px;">
       <option selected disabled >Select..</option>
                 <?php 
                              
                              $getR = "select * from users where users.user_role='Ramasseurs'";
                              $runR = mysqli_query($con,$getR);
                              
                              while ($rowR=mysqli_fetch_array($runR)){
                                  
                                  $ramasseur_id = $rowR['user_id'];
                                  $nameR = $rowR['user_name'];
                                  
                                  echo "
                                  
                                  <option class='row_value' value='$ramasseur_id'> $nameR </option>
                                  
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
                   
                     <th hidden> </th>
                     <th>ID: </th>
                    <th>name vendeur: </th>
                    <th>Heure demande: </th>
                    <th>date de ramassage: </th>
                    <th>Estimation nomber colis: </th>
                    <th>adresse: </th>
                    <th>type: </th>
                    <th>Ramasseur: </th>

                 
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
        
        
        $query = " UPDATE demande SET user_id_ram = $value->idr , etat_dmd='no ramassé' WHERE dmd_id =  $value->idd ";
        
        $run=mysqli_query($con , $query);
        
        if($run){
            
            echo" <script>alert('ok')</script> ";
             echo "<script>window.open('indexAdmin.php?nouvelle_ramassage','_self')</script>";
            
        }
        
        
    }
}
         
     }    
         
     
       
     ?> 
           
 
 
<script>
    
    
    btn.onclick=function(){
        
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
    
 