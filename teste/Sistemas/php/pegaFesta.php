<?php 

require_once __DIR__.'/connect.php';
$codFesta = isset($_POST['codFesta']) ? $_POST['codFesta'] : '';
$sql = "SELECT * FROM festas where codFesta ='$codFesta';";
$results = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($results);  
      echo json_encode($row); // retorna os dados para conferir o json



  
  ?>          