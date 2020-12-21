<?php

class Conexion
{
    private $conect;

    public function __construct()
    {
        $connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";.DB_CHARSET.";
        try {
            // $this->conect = new PDO($connectionString, $this->user, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "conexion exitosa";
        } catch (PDOException $e) {
            $this->conect = "Error de conexion";
            echo "Error: " . $e->getMessage();
        }
    }
    public function conect()
    {
        return $this->conect;
    }
}
