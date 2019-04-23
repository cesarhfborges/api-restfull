<?php
date_default_timezone_set("America/Sao_Paulo");
define('CHARSET', 'UTF-8');
setlocale(LC_ALL, 'pt-BR');
ini_set('error_reporting', E_ALL);
ini_set('log_errors',TRUE);
ini_set('html_errors',TRUE);
ini_set('display_errors',TRUE);
require 'environment.php';
global $config;
global $db;
$config = array();
define("BASE_URL", "http://sdmanager.darvsistemas.com.br/");
define("UPLOAD_DIR", getcwd()."/upload/fotos/");
define('NOMESISTEMA','Faxino');
define('NOMEEMPRESA','Faxino Tecnologia de Serviços');
define('VERSAO','1.0.1'); //Maior / Menor / Release

$db = new PDO("mysql:dbname=faxino;   host:localhost", "root", "@zyba.@", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
