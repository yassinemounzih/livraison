<?php

//database_connection.php

$connect =  mysqli_connect("localhost","root","","livraison");


function fill_select_boxs($connect)
{
 $query = " SELECT * FROM ramasseurs";

 $statement = mysqli_query($connect,$query);


 $result = mysqli_fetch_all($statement);

 $output = '';

 foreach($result as $row)
 {
  $output .= '<option value="'.$row[0].'">'.$row[1].'</option>';
     
 }


 return $output;
    
}
?>

