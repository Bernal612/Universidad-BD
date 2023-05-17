<?php

include_once('db.php');

class DatabaseProcess extends DatabasePDO{
    private $user;
    private $pass;

    public function getAll(){
        try{
            $cnn = $this->conn();
            $respuesta = $cnn->prepare("select * from user");
            $respuesta->execute();
            $usuarios=[];
            foreach($respuesta as $res){
                $usuarios[]=$res;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
        return $usuarios;
    }

    public function login($user, $pass){
        try{
            $this->user=$user;
            $this->pass=$pass;

            $cnn = $this->conn();
            $stmt = $cnn->prepare("SELECT * FROM user WHERE email=:usernameEmail AND pass=:hash_password");
            $stmt->bindParam("usernameEmail", $this->user,PDO::PARAM_STR);
            $stmt->bindParam("hash_password", $this->pass,PDO::PARAM_STR);
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if($count)
            {           
                $mesage = "Verdadero";
            }
            else
            {
                $mesage = "Falso";
            } 
        }catch(Exception $e){
            echo '("error":("text":'.$e->getMessage() ."))";
        }
        return $mesage;
    }
}

?>