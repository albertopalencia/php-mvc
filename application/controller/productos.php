<?php


class productos extends Controller
{
    
    public function index()
    {
        $productos_model = $this->loadModel('ProductosModel');
        $data = $productos_model->listadoProductos();       

        require 'application/views/_templates/header.php';
        require 'application/views/productos/index.php';
        require 'application/views/_templates/footer.php';

    }

}
