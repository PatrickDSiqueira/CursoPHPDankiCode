<?php

$page = @$_GET['page'];

include('header.php');

if (file_exists($page.'.php')) {
    include($page.'.php');
}
?>