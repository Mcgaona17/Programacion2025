<?php

namespace app\models\entities;

use app\models\drivers\ConexDB;

class Person extends Entity{
    
    //Los atributos se pueden utilizar en clases que sean heredables
    protected $id = null;
    protected $name = "";
    protected $email = "";
    protected $age = null;

    public function mayorEdad(){
        
        if($this -> age >= 18){
            return "Si";
        }else{
            return "No";
        }
    }

    public function all(){ //consultar los datos de la DB
        $sql = "select * from personas"; //personas es el nombre de la tabla 
        $conex = new ConexDB(); //abre la conexion a la base de datos
        $resultDb = $conex -> execSQL($sql); //ejecutar DB
        $persons = []; //crear un array de datos para traer los datos

        if($resultDb -> num_rows>0){//recorrer resultados
            while($rowDb = $resultDb -> fetch_assoc()){ 
                $person = new Person(); //crear un objeto de la clase 
                $person -> set("id", $rowDb["id"]);
                $person -> set("name", $rowDb["nombre"]);
                $person -> set("email", $rowDb["email"]);
                $person -> set("age", $rowDb["edad"]);
                array_push($persons, $person); // agregar el objeto al array            }
            }
        }
        $conex -> close();
        return $persons;
    }

}