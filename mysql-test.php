<?php


$config = parse_ini_file('config.ini');

$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',
  $config['mysql_host'],
  $config['mysql_database']);

$db = new PDO($dns, $config['mysql_user'], $config['mysql_password']);


$db->query('CREATE TABLE Bla(first_name CHAR(30), last_name CHAR(30), age INT)');
