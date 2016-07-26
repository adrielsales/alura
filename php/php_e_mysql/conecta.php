<?php

define("SERVIDOR", "localhost"); 
define("USUARIO", "root"); 
define("SENHA", 123); 
define("BANCO", "loja"); 

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);