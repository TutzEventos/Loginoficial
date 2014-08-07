<?php
include 'includes/funcoesuteis.inc';

ValidaAutenticacao('frmlogin.php','RES');

echo '<meta charset=UTF-8>';
echo '<h3> Página Inicial  do Usuário Restrito </h3>';
echo '<a href=frmAtualizar.php> Atualizar Perfil</a> <br>';
echo '<a href=logout.php?p=index.php>Logout</a><br>';
