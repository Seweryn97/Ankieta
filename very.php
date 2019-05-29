<?php
function testWiek($wiek){
    if(preg_match("/^([0-9]{2})?$/i", $wiek)){
        return "<p style=\"font-size:120%; font-weight:bold; color:#9BFF16;\">Wiek poprawny</p>";
    }
    else{
        return "<p style=\"font-size:120%; font-weight:bold; color:#FF0000;\"> Wiek jest niepoprawny </p>";
    }
}

    $status=testWiek($_REQUEST['wiek']);
    echo $status;
    ?>
