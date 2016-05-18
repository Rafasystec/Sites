<?php

//Credenciais de acesso ao banco de dados
$host 		= "localhost";
$database	= "sindata";
$user		= "root";
$pass		= "rafa1>rafa2";
//NOTE: Conectar-se ao banco de dados
$connecion = mysql_pconnect($host,$user,$pass) or trigger_error(mysql_error(),E_USER_ERROR);
//NOTE: Selecionar a base de dados
mysql_select_db($database,$connecion);