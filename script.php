<?php

include "services/servicoMensagemSessao.php";
include "services/servicoValidacao.php";
include "services/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');