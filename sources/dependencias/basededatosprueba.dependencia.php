<?php 
$bd_usuarios = [
	[
		'userid' => 1,
		'usernombre' => 'Yahir Axel',
		'userapellido'  => 'Garcia Keymurth',
		'usernickname'  => 'YahirKeym',
		'userpassword'  => 'Prueba123_',
		'userfoto' => 'yahir_unshaomdoloquesea',
		'userrango' => 'admin',
		'userrangoforo' => 'neewbie'
	],
	[
		'userid' => 2,
		'usernombre' => 'Yahir Vatoloco',
		'userapellido'  => 'Keymurth Torres',
		'usernickname'  => 'Yakeym',
		'userpassword'  => 'Prueba123_',
		'userfoto' => 'yahirloco_unshaomdoloquesea',
		'userrango' => 'admin',
		'userrangoforo' => 'neewbie'
	]
];
$bd_categorias = [
	[
		'categoriaid' => 1,
		'categorianombre' => 'General',
		'categoriadescripcion'  => 'Soy la categoria General'
	]
];
$bd_subcategorias = [
	'subcategoriaid' => 1,
	'subcategorianame' => 'Sub-general',
	'categoriaid' => 1
];
$bd_posts = [
	[
		'postid' => 1,
		'postnombre' => 'firstpost',
		'postcontent' => 'SOY MUCHO CONTENIDO',
		'postcreado' =>  '07/06/2019',
		'posteditado' => '07/06/2019',
		'postcalificacion' => 5,
		'postcategoria' => 1,
		'postsubcategoria' => null
	]
];
$bd_firmas = [

];
$bd_config = [
	'configtemplate' => 'default',
	'confignombreforo' => 'YahirForum',
];
?>