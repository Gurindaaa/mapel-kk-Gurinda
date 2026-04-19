<?php
function onlyPetugas(){
    if($_SESSIION[role] != 'petugas'){
        header("Location: ../logout.php");
        exit;
        }
    }

    <?php
function onlyPetugas(){
    if($_SESSIION[role] != 'petugas'){
        header("Location: ../logout.php");
        exit;
        }
    }
function onlyOwner(){
    if($_SESSIION[role] != 'owner'){
        header("Location: ../dashboard.php");
        exit;
        }
    }
?>