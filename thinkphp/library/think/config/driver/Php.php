<?php

namespace think\config\driver;

class Php{
    protected $config;

    public function __construct($config){
        $this->config = $config;
    }

    public function parse(){
        return include $this->config;
    }
}