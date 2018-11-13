<?php

include_once('config.php');

if(isset($_GET['id'])) {
    echo '<h1>DA</h1>';
    $id = $_GET['id'];
}else {
    $id = 1;
}


include('header.php');

include('page.php');



include('footer.php');

?>