<?php

define("DB_USER", "root");
define("DB_PASS", "");

Class DatabasePDO {
    private $user = DB_USER;
    private $pass = DB_PASS;

    public function conn(){

        try{

            $base_de_datos = new PDO('mysql:host=localhost;dbname=universidad', $this->user, $this->pass);
            if ($base_de_datos) {
                return $base_de_datos;
            }
        }catch(Exception $e){
            return "Ocurrió algo con la base de datos: " . $e->getMessage();
        }
    }
}

?>