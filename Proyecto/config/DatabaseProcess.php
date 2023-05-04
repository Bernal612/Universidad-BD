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

            $mi = "bernal";
            $ps = "123";

            $cnn = $this->conn();
                $stmt = $cnn->prepare('SELECT * FROM user WHERE usuario=:usernameEmail AND pass=:hash_password');
                $stmt->bindParam("usernameEmail", $mi,PDO::PARAM_STR);
                $stmt->bindParam("hash_password", $ps,PDO::PARAM_STR);
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                $db = null;
                $message = "";
            if($count){
                $message = "verdadero";
            }
            else{
                $message= "falso";
            }
        }catch(Exception $e){
            echo '{"error":{"text":'.$e->getMessage() ."}}";
        }
        echo $cnn;
    }
}

?>