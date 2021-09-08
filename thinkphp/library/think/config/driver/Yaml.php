<?php

namespace think\config\driver;

class Yaml{
    protected $config;

    public function __construct($config){
        $this->config = $config;
    }

    public function parse(){
        if(function_exists('yaml_parse_file')){
            return yaml_parse_file($file);
        }
    }
}