<?php
/**
 * 
 */
class portalForoHtml
{
	
	public function headerHtml($cTitulo = "",$cMetaTags = "",$cStyleSheets = "")
	{
		return <<<code
<!DOCTYPE html>
	<html lang="Es">
		<head>
			<title>{$cTitulo}</title>
			{$cMetaTags}
			{$cStyleSheets}
		</head>
		<body>
		<h1>HOLA</h1>	
code;
	}
	public function footerHtml()
	{
		return <<<code
code;
	}
}
?>