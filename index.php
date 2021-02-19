<?php
require("vendor/autoload.php");
$openapi = \OpenApi\scan('./src');
//header('Content-Type: application/json');

$txt = $openapi->toJson();
$myfile = fopen("./dist/swagger.json", "w");
fwrite($myfile, $txt);
fclose($myfile);

header("Location: dist/");