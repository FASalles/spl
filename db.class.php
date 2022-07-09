<?php

class db {

    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = 'root';
    private $database = 'spl';

    public function conecta_mysql(){
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($con, 'utf8');

        if(mysqli_connect_errno()){
            echo 'Houve um erro de conexão mysql: ' . mysqli_connect_error();
        }

        return $con;
    }
}

?>