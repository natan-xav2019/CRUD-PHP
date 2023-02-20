<?php 
 class Connection {

    public String $server = "localhost";
    public String $user = "root";
    public String $password = "";
    private String $dbname= "????";

    private $connected;

    public function __construct() {

    }

    function open() {
        $this->connected = mysqli_connect($this->server ,$this->user ,$this->password ,$this->dbname);
    }

    function close() {
        $this->connected->close;
    }

    #Função destinada para criar um novo registro no banco.
    function create() {

    }
    #Função destinada a fazer uma busca no banco e apresentar ela
    function read() {

    }

    #função destinada a eliminar um registro do banco.
    function delete(int $id) {

    }

    #função destinada a editar um registro do banco.
    function update(int $id, array $request) {
        
    }




 }