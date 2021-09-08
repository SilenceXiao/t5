<?php

spl_autoload_register('autoload',true,true);

function autoload($className=""){
    echo "类名：{$className}".PHP_EOL;
    include "./{$className}.php";
}

//类的别名设置
class_alias('BrockTest','V');
$class = new V();
$class = new BrockTest();

$class->index();