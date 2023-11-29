<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Hierba extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $hierbaModel = model('HierbaModel');
        $data['planta_hierbas'] = $hierbaModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('hierba/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('hierba/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $hierbaModel = model('HierbaModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $hierbaModel->insert($data, false);
        return redirect('hierba/mostrar', 'refresh');
    }
    public function editar($id_hierba)
    {
        $hierbaModel = model('HierbaModel');
        $data['planta_hierbas'] = $hierbaModel->find($id_hierba);
        return view('common/head') .
            view('common/menuP') .
            view('hierba/editar',$data) .
            view('common/footer');
    }
    public function update()
    {
        $hierbaModel = model('HierbaModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $hierbaModel->update($_POST['id_hierba'], $data);
        return redirect('hierba/mostrar', 'refresh');
    }
    public function buscar()
    {
        $hierbaModel = model('HierbaModel');
        if (isset($_GET['nombre_planta'])) {
            $nombre_planta = $_GET['nombre_planta'];
            $lugar_origen = $_GET['lugar_origen'];
            $data['planta_hierbas'] = $hierbaModel->like('nombre_planta', $nombre_planta)
            -> like('lugar_origen',$lugar_origen) ->findAll();
        } else {
            $nombre_planta = "";
            $data['planta_hierbas'] = $hierbaModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('hierba/buscar',$data) .
            view('common/footer');
    }
    public function delete($id_hierba)
    {
        $hierbaModel = model('HierbaModel');
        $hierbaModel->delete($id_hierba);
        return redirect('hierba/mostrar', 'refresh');
    }
}
