<?php 

interface Crud { 
    #Função destinada para criar um novo registro no banco.
    public function create(array $user);

    #Função destinada a fazer uma busca no banco e apresentar ela
    public function read(string $condicional);

    #função destinada a eliminar um registro do banco.
    public function delete(int $id);

    #função destinada a editar um registro do banco. 
    public function update(int $id, array $user);

    

}