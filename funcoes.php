<?php

function mostraAlerta()
{
    if (isset($_SESSION['success'])) {
        echo"<div class='alert alert-success mt-2' role='alert'>".$_SESSION['success']."</div>";
        unset($_SESSION['success']);
    } elseif (isset($_SESSION['danger'])) {
        echo"<div class='alert alert-danger' role='alert'>".$_SESSION['danger']."</div>";
        unset($_SESSION['danger']);
    } else {
    }
}
