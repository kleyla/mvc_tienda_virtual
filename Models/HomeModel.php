<?php

class HomeModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
        // echo "mensaje desde el modelo home!";
    }
    public function setUSer(string $nombre, int $edad)
    {
        $query_insert = "INSERT INTO usuarios(nombre, edad) VALUES(?,?)";
        $arrData = array($nombre, $edad);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }
    public function getUser($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $request = $this->select($sql);
        return $request;
    }
    public function updateUser(int $id, string $nombre, int $edad)
    {
        $sql = "UPDATE usuarios SET nombre = ?, edad = ? WHERE id = $id";
        $arrData = array($nombre, $edad);
        $request = $this->update($sql, $arrData);
        return $request;
    }
    public function getUsers()
    {
        $sql = "SELECT * FROM usuarios";
        $request = $this->select_all($sql);
        return $request;
    }
    public function delUser($id)
    {
        $sql = "DELETE FROM usuarios WHERE id = $id";
        $request = $this->delete($sql);
        return $request;
    }
    public function getCarrito($params)
    {
        return "Datos del carrito " . $params;
    }
}
