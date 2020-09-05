<?php

class UsersModel
{

    private $PDO;

    public function __construct()
    {
        $this->PDO = new PDO('../../db.db');
    }

    public function create($data)
    {
        try {
            $sql = "INSERT INTO users (name, email, phone) VALUES (?,?,?)";
            $stmt = $this->PDO->prepare($sql);
            $rst = $stmt->execute($data);
            return $rst;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function get($where)
    {
        try {
            $sql = "SELECT * FROM users " . $where;
            $stmt = $this->PDO->prepare($sql);
            $rst = $stmt->execute($data);
            return $rst->fetchAll();
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function update($data, $id)
    {
        try {
            $sql = "UPDATE users SET name = ?, email = ?, phone = ? WHERE id={$id}";
            $stmt = $this->PDO->prepare($sql);
            $rst = $stmt->execute($data);
            return $rst;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function remove($id)
    {
        try {
            $sql = "DELETE FROM users WHERE id={$id}";
            $stmt = $this->PDO->prepare($sql);
            $rst = $stmt->execute($data);
            return $rst;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
}
