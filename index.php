<?php 
header('Content-Type: text/html; charset=UTF-8');
include('correios.class.php');
if(isset($_GET['cep'])){
	die(json_encode(Correios::cep($_GET['cep'])));
}elseif(isset($_GET['codigo-rastreio'])){
	die(json_encode(Correios::rastreio($_GET['codigo-rastreio'])));
}else{
	die('informe parametro GET cep ou codigo-rastreio');
}
