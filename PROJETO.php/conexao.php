<?php
require_once "config.php";

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados.");
}

$conn->set_charset("utf8");
