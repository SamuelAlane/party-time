<?php


require 'vendor/autoload.php';

$app = new \atk4\ui\App();
$app -> initLayout('Centered');

$app -> add([
    'Button',
    'Hello Samuel',
    'huge green fluid',
    'icon'=>'trophy',
]) -> link('https://www.google.com');











 ?>
