<?php
require_once("template.php");
define("TEMPLATES_PATH", "templates");

 $main = new Template();
 $data = array(
	'title' => 'This is tekst from data',
	'heading' => 'Welcome to my page!',
	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
);
 echo $main->render('templates/template-2.php', $data);
