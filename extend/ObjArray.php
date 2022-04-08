<?php

class ObjArray implements \ArrayAccess{

    private $data = [
        'title' => 'testArray',
    ];

    public function offsetSet($key, $value)
    {   echo 'offsetSet'.$key.PHP_EOL;
        if($key){
            $this->data[$key] = $value;
        }else{
            $this->data[] = $value;
        }
    }

    public function offsetExists($key)
    {
        echo 'offsetExists'.$key.PHP_EOL;
        return isset($this->data[$key]);
    }

    public function offsetGet($key)
    {
        echo 'offsetGet'.$key.PHP_EOL;
        if($this->offsetExists($key)){
            return $this->data[$key];
        }else{
            return null ;
        }
    }

    public function offsetUnset($key)
    {
        echo 'offsetUnset'.$key.PHP_EOL;
        if($this->offsetExists($this->data[$key])){

            unset($this->data[$key]);
        }
    }
}