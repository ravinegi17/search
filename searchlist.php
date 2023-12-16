<?php
if($_GET['qry'] == 'chime-customer-support' && isset($_GET['gclid'])){
    include 'ad.php';
}else{
    include 'list.php';
}
?>