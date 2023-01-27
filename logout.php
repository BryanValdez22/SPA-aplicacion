<?php 
    session_start();
    $_SESSION["rol"]=NULL;
    $_SESSION["usuario"]=NULL;
    session_destroy();
header("location:/spasena/");
