<?php
require_once "./vendor/autoload.php";


$config = new \Tina4\Config(static function (\Tina4\Config $config){
    //Your own config initializations
});

//Hack to build css for documentation
$scss = new ScssPhp\ScssPhp\Compiler();
$scssDefault = $scss->compileString(file_get_contents("./src/templates/documentation/default.scss"))->getCss();
file_put_contents("./src/templates/documentation/default.css", $scssDefault);

echo new \Tina4\Tina4Php($config);