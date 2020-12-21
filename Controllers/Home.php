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
        $data["tag_name"] = "Home";
        $data["page_title"] = "Pagina principal";
        $data["page_name"] = "home";
        $data["page_content"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse exercitationem ratione obcaecati voluptatibus. Quidem minus iste totam id recusandae, sapiente, consequatur at hic eius repudiandae soluta deserunt commodi ab voluptate?";
        $this->views->getView($this, "home", $data);
    }
    public function insertar()
    {
        $data = $this->model->setUser("Karen", 15);
        print_r($data);
    }
    public function find($id)
    {
        $data = $this->model->getUser($id);
        print_r($data);
    }
    public function update()
    {
        $data = $this->model->updateUser(1, "Leyla", 20);
        print_r($data);
    }
    public function all()
    {
        $data = $this->model->getUsers();
        print_r($data);
    }
    public function eliminar($id)
    {
        // echo 1;
        $data = $this->model->delUser($id);
        print_r($data);
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
