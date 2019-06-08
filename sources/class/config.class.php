<?php
/**
 * @author Yahir Axel Garcia Keymurt <arzkaner@gmail.com>
 */
class config
{	
	public function conexion($cUserName = "", $cHost = "", $cPassword = "", $cDatabase = "")
	{
		$oConexion = new mysqli($cUserName,$cHost,$cPassword,$cDatabase);
	}
	private function selectTemplate()
	{
		
	}
}
?>