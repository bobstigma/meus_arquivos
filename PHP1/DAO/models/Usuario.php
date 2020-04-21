<?php
//Usada para manipulação do usuário
class Usuario{
    private $id;
    private $nome;
    private $email;

    //Gets e Sets
    public function getId(){
        return $this->id;
    }
    public function setId($i){
        $this->id = trim($i);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = ucwords(trim($n));
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = strtolower(trim($e));
    }
}

//criação da interface do usuário

interface UsuarioDAO{
    public function add(Usuario $u);        //Criação de usuário
    public function findAll();              //Buscando todos usuários
    public function findByEmail($email);    //Buscando o usuário pelo email
    public function findById($id);          //Buscando usuário pelo ID    
    public function update(Usuario $u);     //Atualizando o usuário    
    public function delete($id);            //Deletando o usuário
}