<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Medicinal extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $medicinalModel = model('MedicinalModel');
        $data['planta_medicinales'] = $medicinalModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('medicinal/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('medicinal/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $medicinalModel = model('MedicinalModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $medicinalModel->insert($data, false);
        return redirect('medicinal/mostrar', 'refresh');
    }
    public function editar($id_medicinal)
    {
        $medicinalModel = model('MedicinalModel');
        $data['planta_medicinales'] = $medicinalModel->find($id_medicinal);
        return view('common/head') .
            view('common/menuP') .
            view('medicinal/editar',$data) .
            view('common/footer');
    }
    public function update()
    {
        $medicinalModel = model('MedicinalModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $medicinalModel->update($_POST['id_medicinal'], $data);
        return redirect('medicinal/mostrar', 'refresh');
    }
    public function buscar()
    {
        $medicinalModel = model('MedicinalModel');
        if (isset($_GET['nombre_planta'])) {
            $nombre_planta = $_GET['nombre_planta'];
            $lugar_origen = $_GET['lugar_origen'];
            $data['planta_medicinales'] = $medicinalModel->like('nombre_planta', $nombre_planta)
            -> like('lugar_origen',$lugar_origen) ->findAll();
        } else {
            $nombre_planta = "";
            $data['planta_medicinales'] = $medicinalModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('medicinal/buscar',$data) .
            view('common/footer');
    }
    public function delete($id_medicinal)
    {
        $medicinalModel = model('MedicinalModel');
        $medicinalModel->delete($id_medicinal);
        return redirect('medicinal/mostrar', 'refresh');
    }
}
