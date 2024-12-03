<?php
try{
    $num = 10;
    $div = 2;
    if($div==0){
        throw new exception("Not allowed");
    }
    $result = $num/$div;
}
catch(Exception $e){
    echo "Error:" .$e->getMessage();
}
?>