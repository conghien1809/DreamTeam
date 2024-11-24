<?php
    session_start();
    //
    require("assets/header.php");
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page='homepage';
    }
    //
    if(file_exists("page/".$page."/index.php")){
        include("page/".$page."/index.php");
    }
    include("assets/footer.php");

?>