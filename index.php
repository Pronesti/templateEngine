<?php
include_once("TemplateEngine.php");
$te = new TemplateEngine("index.template");
$te->addVariable("Title", "Soy un titulo");
$te->addVariable("Content", "Yo soy el contenido");
echo $te->render();
echo "Numero de variables a reemplazar: " . $te->countTemplates();