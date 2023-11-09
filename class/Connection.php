<?php 
 class Connection implements Crud{

    private String $server = "localhost";
    private String $user = "root";
    private String $password = "";
    private String $dbname= "crud";

    private $connected;

    public function __construct() {
        $this->open();

        if ($this->connected->connect_error) {
            die("Conexão falhou: " . $this->connected->connect_error);
        }   

        $this->close();
    }

    function open() {
        $this->connected = mysqli_connect($this->server ,$this->user ,$this->password ,$this->dbname);
    }

    function close() {
        $this->connected->close();
    }

    #Função destinada para criar um novo registro no banco.
    function create(array $data) {
        $this->open();

        $name = $data["name"];
        $age = $data["age"];

        $sql = "INSERT INTO `consumer`(`name`, `age`) VALUES ('$name','$age')";
        
        $this->connected->query($sql);

        $this->close();
    }
    #Função destinada a fazer uma busca no banco e apresentar ela
    function read(string $condicional) {
        $this->open();

        $sql = "SELECT * FROM `consumer` WHERE $condicional";
        
        $array = $this->connected->query($sql);

        $this->close();

        return $array;
    }

    #função destinada a eliminar um registro do banco.
    function delete(int $id) {
        $this->open();
        
        $sql = "DELETE FROM `consumer` WHERE id = $id";
        $this->connected->query($sql);
                
        $this->close();
    }

    #função destinada a editar um registro do banco.
    function update(int $id, array $user) {
        $this->open();

        $name = $user["name"];
        $age = $user["age"];

        $sql = "UPDATE `consumer` SET `name` = '$name', `age` = '$age' WHERE id = $id";
        $this->connected->query($sql);
                
        $this->close();
    }
    
 }