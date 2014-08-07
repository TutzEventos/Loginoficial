<?php
include_once '../includes/funcoesuteis.inc';

ValidaAutenticacao('frmlogin.php','ADM');
echo '<meta charset=UTF-8">';
echo '<h3> Página Inicial do Usuário da empresa </h3>';
echo '<a href=../logout.php?p=index.php>Logout</a>';