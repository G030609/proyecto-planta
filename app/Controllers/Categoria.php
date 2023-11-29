<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categoria extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $categoriaModel = model('CategoriaModel');
        $data['categorias'] = $categoriaModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('categoria/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('categoria/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $categoriaModel = model('CategoriaModel');
        $data = [
            "nombre_categoria" => $_POST['nombre_categoria']

        ];
        $categoriaModel->insert($data, false);
        return redirect('categoria/mostrar', 'refresh');
    }
    
    public function editar($idCategoria)
    {
        $categoriaModel = model('CategoriaModel');
        $data['categorias'] = $categoriaModel->find($idCategoria);
        return view('common/head') .
            view('common/menuP') .
            view('categoria/editar',$data) .
            view('common/footer');
    }

    public function update()
    {
        $categoriaModel = model('CategoriaModel');
        $data = [
            "nombre_categoria" => $_POST['nombre_categoria']

        ];
        $categoriaModel->update($_POST['idCategoria'], $data);
        return redirect('categoria/mostrar', 'refresh');
    }
    public function buscar()
    {
        $categoriaModel = model('CategoriaModel');
        if (isset($_GET['nombre_categoria'])) {
            $nombre_categoria = $_GET['nombre_categoria'];
            $data['categorias'] = $categoriaModel->like('nombre_categoria', $nombre_categoria)->findAll();
        } else {
            $nombre_categoria = "";
            $data['categorias'] = $categoriaModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('categoria/buscar',$data) .
            view('common/footer');
    }
    public function delete($idCategoria)
    {
        $categoriaModel = model('CategoriaModel');
        $categoriaModel->delete($idCategoria);
        return redirect('planta/mostrar', 'refresh');
    }
}
