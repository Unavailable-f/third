<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;	
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?$APPLICATION->ShowTitle('');?></title>	
		<?php 
		$APPLICATION->ShowHead();
		Asset::getInstance()->addCss("/local/templates/main/assets/css/common.css"); 
		Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>');
		Asset::getInstance()->addCss("/local/templates/main/assets/css/style.css")
		?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
	
		