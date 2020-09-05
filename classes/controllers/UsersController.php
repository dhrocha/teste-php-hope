<?php

class UsersController{

    private $usersModel;

    public function __construct(){
        $this->usersModel = new UsersModel();
    }
    
    public function create()
    {
        // Dados via axios
        $data = json_decode(file_get_contents('php://input'), true);

        $rst = $this->usersModel->create($data);
        return $rst;

    }

    public function getAll(){
        $rst = $this->usersModel->getAll();
        return $rst;
    }

    public function getById(){
        // Dados via axios
        $data = json_decode(file_get_contents('php://input'), true);
        $where = " WHERE userId = {$data['id']}";
        $rst = $this->usersModel->getById($id);
        return $rst;
    }

    public function update(){
         // Dados via axios
         $data = json_decode(file_get_contents('php://input'), true);

         $rst = $this->usersModel->update($data['fields'], $data['id']);
         return $rst;

    }

    public function remove(){
        // Dados via axios
        $data = json_decode(file_get_contents('php://input'), true);
        $where = " WHERE userId = {$data['id']}";
        $rst = $this->usersModel->remove($id);
        return $rst;
    }
}
