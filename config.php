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
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
define("BASE_URL", $protocol."sdspot.com.br/sdmanager-backend/");
define('NOMESISTEMA','SdManager');
define('EMPRESA','SdRedes');
define('VERSAO','2.0.0'); //Maior / Menor / Release
define('BUILD', 'Alpha');
$db = new PDO("mysql:dbname=sdmanager-api;host:localhost", "root", "Sd@2018", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8, lc_time_names='pt_BR';"));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//senha d[D7uf!B5mh.
