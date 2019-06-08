<?php
/**
 * 
 */
class portalForoHtml
{
	
	public function headerHtml($cTitulo = "",$cMetaTags = "",$cStyleSheets = "",$cTemplate = "")
	{
		return <<<code
<!DOCTYPE html>
	<html lang="Es">
		<head>
			<title>{$cTitulo}</title>
			{$cMetaTags}
			<link rel="stylesheet" type="text/css" href="templates/{$cTemplate}/assets/pack/{$cStyleSheets}.css" />
		</head>
		<body>
		<h1 class="">HOLAs</h1>	
code;
	}
	public function footerHtml()
	{
		return <<<code
code;
	}
}
?>