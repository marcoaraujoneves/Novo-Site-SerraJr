<?php
require_once __DIR__.'/connect.php';


$CodSlider = isset($_POST['CodSlider']) ? $_POST['CodSlider'] : '';
echo $_POST['CodSlider'];

$sql = "  
    DELETE FROM  slide
    WHERE CodSlide ='$CodSlider' ";
    echo $sql;
 $results = mysqli_query($conn, $sql);
   echo unlink('../../Img/slider/'.$CodSlider.'');

    


?>