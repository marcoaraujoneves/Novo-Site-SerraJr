<?php
require_once __DIR__.'/connect.php';


$CodFesta = isset($_POST['CodFesta']) ? $_POST['CodFesta'] : '';


$sql = "  
    UPDATE festas
    set ativada = '1'
    WHERE codFesta ='$CodFesta'";
    echo $sql;
    $results = mysqli_query($conn, $sql);


?>