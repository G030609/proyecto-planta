<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Arbusto extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $arbustoModel = model('ArbustoModel');
        $data['planta_arbustos'] = $arbustoModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('arbusto/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('arbusto/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $arbustoModel = model('ArbustoModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $arbustoModel->insert($data, false);
        return redirect('arbusto/mostrar', 'refresh');
    }
    public function editar($id_arbusto)
    {
        $arbustoModel = model('ArbustoModel');
        $data['planta_arbustos'] = $arbustoModel->find($id_arbusto);
        return view('common/head') .
            view('common/menuP') .
            view('arbusto/editar',$data) .
            view('common/footer');
    }
    public function update()
    {
        $arbustoModel = model('ArbustoModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $arbustoModel->update($_POST['id_arbusto'], $data);
        return redirect('arbusto/mostrar', 'refresh');
    }
    public function buscar()
    {
        $arbustoModel = model('ArbustoModel');
        if (isset($_GET['nombre_planta'])) {
            $nombre_planta = $_GET['nombre_planta'];
            $lugar_origen = $_GET['lugar_origen'];
            $data['planta_arbustos'] = $arbustoModel->like('nombre_planta', $nombre_planta)
            -> like('lugar_origen',$lugar_origen) ->findAll();
        } else {
            $nombre_planta = "";
            $data['planta_arbustos'] = $arbustoModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('arbusto/buscar',$data) .
            view('common/footer');
    }
    public function delete($id_arbusto)
    {
        $arbustoModel = model('ArbustoModel');
        $arbustoModel->delete($id_arbusto);
        return redirect('arbusto/mostrar', 'refresh');
    }
}
