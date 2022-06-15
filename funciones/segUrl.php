<?php
function destroyPost() {
        if (!isset($_SESSION['email'])){
            session_destroy();
            header("location:../index.html");
        } elseif ($_SESSION['tipo'] != 0){
            session_destroy();
            header("location:../index.html");
        }
    }

    function destroyPat() {
        if (!isset($_SESSION['email'])){
            session_destroy();
            header("location:../index.html");
        } elseif ($_SESSION['tipo'] != 1){
            session_destroy();
            header("location:../index.html");
        }
    }

    function destroyRepre() {
        if (!isset($_SESSION['email'])){
            session_destroy();
            header("location:../index.html");
        } elseif ($_SESSION['tipo'] != 2){
            session_destroy();
            header("location:../index.html");
        }
    }

 ?>