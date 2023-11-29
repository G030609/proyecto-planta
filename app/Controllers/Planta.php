<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Planta extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $plantModel = model('PlantModel');
        $data['plantas'] = $plantModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('planta/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('planta/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $plantModel = model('PlantModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "categoria" => $_POST['categoria'],
            "lugarOrigen" => $_POST['lugarOrigen'],
            "usos"=>$_POST['usos']

        ];
        $plantModel->insert($data, false);
        return redirect('planta/mostrar', 'refresh');
    }
    public function editar($id_planta)
    {
        $plantModel = model('PlantModel');
        $data['plantas'] = $plantModel->find($id_planta);
        return view('common/head') .
            view('common/menuP') .
            view('planta/editar',$data) .
            view('common/footer');
    }
    public function update()
    {
        $plantModel = model('PlantModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "categoria" => $_POST['categoria'],
            "lugarOrigen" => $_POST['lugarOrigen'],
            "usos"=>$_POST['usos']

        ];
        $plantModel->update($_POST['id_planta'], $data);
        return redirect('planta/mostrar', 'refresh');
    }
    public function buscar()
    {
        $plantModel = model('PlantModel');
        if (isset($_GET['nombre_planta'])) {
            $nombre_planta = $_GET['nombre_planta'];
            $lugarOrigen = $_GET['lugarOrigen'];
            $data['plantas'] = $plantModel->like('nombre_planta', $nombre_planta)-> like('lugarOrigen',$lugarOrigen) ->findAll();
        } else {
            $nombre_planta = "";
            $data['plantas'] = $plantModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('planta/buscar',$data) .
            view('common/footer');
    }
    public function delete($id_planta)
    {
        $plantModel = model('PlantModel');
        $plantModel->delete($id_planta);
        return redirect('planta/mostrar', 'refresh');
    }
}

