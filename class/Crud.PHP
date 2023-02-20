<?php 

interface Crud { 
    #Função destinada para criar um novo registro no banco.
    public function create();

    #Função destinada a fazer uma busca no banco e apresentar ela
    public function read();

    #função destinada a eliminar um registro do banco.
    public function delete(int $id);

    #função destinada a editar um registro do banco.
    public function update(int $id, array $request);

    

}