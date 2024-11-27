<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Acesso negado! Voce não tem permissão para acessar essa página.");
}