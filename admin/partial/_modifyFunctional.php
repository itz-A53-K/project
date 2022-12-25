<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $dist_id=$_POST['dist_id'];
    $vac_slot=$_POST['vac_slot'];
    $vac_stock=$_POST['vac_stock'];

    echo $dist_id.'/n'.$vac_slot.'/n'.$vac_stock.'/n';

    
}
?>