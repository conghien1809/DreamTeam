<?php
    error_reporting(1);
    session_start();
    require("class/classdb.php");
    require("assets/header.php");
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page='trangchu';
    }
    //
    if(file_exists("page/".$page."/index.php")){
        include("page/".$page."/index.php");
    }
    include("assets/footer.php");

?>