<?php
require_once("template.php");
define("TEMPLATES_PATH", "templates");

 $t = new Template();
 $t->assign('test', 'dina');
 $params = $t->show();
 $t->render(TEMPLATES_PATH . '/template-3.html');
