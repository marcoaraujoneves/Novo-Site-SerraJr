<?php
require_once __DIR__.'/connect.php';


$codFesta = isset($_POST['codFesta']) ? $_POST['codFesta'] : '';
echo $_POST['codFesta'];

$sql = "  
    DELETE FROM  festas
    WHERE codFesta ='$codFesta' ";
    echo $sql;
 $results = mysqli_query($conn, $sql);
   echo unlink('../../Img/festa/'.$codFesta.'');

    


?>