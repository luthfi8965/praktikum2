<?php

$Nasi = "di bakar";
if($Nasi = "di goreng" ){
    echo"menjadi nasi bakar";
}else{
    echo"menjadi nasi biasa";
}
echo "</br>";
switch ($Nasi) {
    case 'di bakar':
        echo "nasi bakar";
        break;
    
    case 'di goreng':
        echo "nasi goreng";
        break;

    default:
        echo "nasi biasa";
        break;
}

?>