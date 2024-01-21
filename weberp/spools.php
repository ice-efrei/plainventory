<?php
include "./sources/templates/pagetop.php";

if(!isset($_GET['id'])){
    include "./sources/templates/spools/home.php";
}else {
    include "./sources/templates/spools/details.php";
}

include "./sources/templates/pagebottom.php"; ?>

