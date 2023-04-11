<?php 
require_once("template.php");
$data = array(
	'title' => 'My Page Title',
	'heading' => 'Welcome to my page!',
	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
);

$t = new Template();
echo $t->render('templates/template.php',$data);


?>