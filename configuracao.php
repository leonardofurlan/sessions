<?php 

session_start(); // iniciar

session_unset(); // limpar variaveis de sessão mas continua com usuário

session_destroy(); // limpar variaveis de sessão e também o usuário

session_id(); // mostra id unico do usuario

session_regenerate_id(); // gerar id diferente (re-gerar)

 ?>