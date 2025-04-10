<?php

namespace app\controllers;

use app\models\entities\Person;

class PersonsController{

    public function queryAllPersons(){ //Consultar todos los datos de las personas
        $person = new Person();
        $data = $person -> all();
        return $data; //Data es un array porq ALL nos forma un array 
    }
}