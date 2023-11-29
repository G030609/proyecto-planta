<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Carnivora extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $carnivoraModel = model('CarnivoraModel');
        $data['planta_carnivoras'] = $carnivoraModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('carnivora/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('carnivora/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $carnivoraModel = model('CarnivoraModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $carnivoraModel->insert($data, false);
        return redirect('carnivora/mostrar', 'refresh');
    }
    public function editar($id_carnicora)
    {
        $carnivoraModel = model('CarnivoraModel');
        $data['planta_carnivoras'] = $carnivoraModel->find($id_carnicora);
        return view('common/head') .
            view('common/menuP') .
            view('carnivora/editar',$data) .
            view('common/footer');
    }
    public function update()
    {
        $carnivoraModel = model('CarnivoraModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $carnivoraModel->update($_POST['id_carnicora'], $data);
        return redirect('carnivora/mostrar', 'refresh');
    }
    public function buscar()
    {
        $carnivoraModel = model('CarnivoraModel');
        if (isset($_GET['nombre_planta'])) {
            $nombre_planta = $_GET['nombre_planta'];
            $lugar_origen = $_GET['lugar_origen'];
            $data['planta_carnivoras'] = $carnivoraModel->like('nombre_planta', $nombre_planta)
            -> like('lugar_origen',$lugar_origen) ->findAll();
        } else {
            $nombre_planta = "";
            $data['planta_carnivoras'] = $carnivoraModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('carnivora/buscar',$data) .
            view('common/footer');
    }
    public function delete($id_carnicora)
    {
        $carnivoraModel = model('CarnivoraModel');
        $carnivoraModel->delete($id_carnicora);
        return redirect('carnivora/mostrar', 'refresh');
    }
}
