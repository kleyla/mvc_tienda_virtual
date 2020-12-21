<?php

class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home($params)
    {
        // echo "mensaje desde el controlador";
        $this->views->getView($this, "home");
    }
    public function datos($params)
    {
        echo "Datos " . $params;
    }
    public function carrito($params)
    {
        $carrito = $this->model->getCarrito($params);
        echo $carrito;
    }
}
