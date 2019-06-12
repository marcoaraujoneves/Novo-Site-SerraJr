<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
require_once __DIR__.'/../connect.php';

$codigo = isset($_POST['codPortifolio']) ? $_POST['codPortifolio'] : '';

$query_select = "SELECT codPortifolio,extensao FROM portifolio where codPortifolio = '$codigo';";
echo $query_select;
        $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
        $rows = array();
        while($row = mysqli_fetch_array($result_select))
            $rows[] = $row;
        foreach($rows as $row){ 
            $nomes = $row['codPortifolio'].'.'.$row['extensao'];
            echo unlink('../img/portifolio/'.$nomes);
        }
//$query = "DELETE FROM portifolio WHERE codPortifolio = '$codigo';";
//$resultado = mysqli_query($conn, $query);  


?>          