<?php

namespace app\models\entities;

class Entity{

    public function set($prop, $value){
        $this-> {$prop} = $value;
    }

    public function get($prop){
        return $this -> {$prop};
    }
}

