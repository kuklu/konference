<?php
if(isset($_SESSION['prihlasen']) or $_SESSION['prava']<3){
    echo "Nemáš právo to vidět";
    exit;
    }

include "vypis_ne.php";
include "vypis_ano.php";

?>