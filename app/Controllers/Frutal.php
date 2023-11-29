<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Frutal extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $frutalModel = model('FrutalModel');
        $data['planta_frutales'] = $frutalModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('frutal/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('frutal/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $frutalModel = model('FrutalModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $frutalModel->insert($data, false);
        return redirect('frutal/mostrar', 'refresh');
    }
    public function editar($id_frutal)
    {
        $frutalModel = model('FrutalModel');
        $data['planta_frutales'] = $frutalModel->find($id_frutal);
        return view('common/head') .
            view('common/menuP') .
            view('frutal/editar',$data) .
            view('common/footer');
    }
    public function update()
    {
        $frutalModel = model('FrutalModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $frutalModel->update($_POST['id_frutal'], $data);
        return redirect('frutal/mostrar', 'refresh');
    }
    public function buscar()
    {
        $frutalModel = model('FrutalModel');
        if (isset($_GET['nombre_planta'])) {
            $nombre_planta = $_GET['nombre_planta'];
            $lugar_origen = $_GET['lugar_origen'];
            $data['planta_frutales'] = $frutalModel->like('nombre_planta', $nombre_planta)
            -> like('lugar_origen',$lugar_origen) ->findAll();
        } else {
            $nombre_planta = "";
            $data['planta_frutales'] = $frutalModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('frutal/buscar',$data) .
            view('common/footer');
    }
    public function delete($id_frutal)
    {
        $frutalModel = model('FrutalModel');
        $frutalModel->delete($id_frutal);
        return redirect('frutal/mostrar', 'refresh');
    }
}
