<?php 
header('Content-Type: text/html; charset=UTF-8');
include('correios.class.php');
include('phpQuery-onefile.php');
if(isset($_GET['cep'])){
	die(json_encode(Correios::cep($_GET['cep'])));
}elseif(isset($_GET['codigo_rastreio'])){
	die(json_encode(Correios::rastreio($_GET['codigo_rastreio'])));
}else{
	die('informe parametro GET <strong>cep</strong> ou <strong>codigo_rastreio</strong>');
}
