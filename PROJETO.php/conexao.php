<?php

require_once __DIR__ . "/config.php";

/*
  Criando a conexão com o banco
*/
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/*
  Verificando erro de conexão
*/
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados.");
}

/*
  Define charset (evita problema com acentos)
*/
$conn->set_charset("utf8");
