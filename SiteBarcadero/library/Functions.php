<?php
include_once 'application/configs/MysqlConnection.php';

mysql_query("INSERT INTO WOW (DESCRIPTION) VALUES ('TESTE ONCE')",$connecion);