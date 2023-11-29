<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Suculenta extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $suculentaModel = model('SuculentaModel');
        $data['planta_suculentas'] = $suculentaModel->findAll();
        return
            view('common/head') .
            view('common/menuP') .
            view('suculenta/mostrar', $data) .
            view('common/footer');
    }
    public function agregar()
    {
        return
            view('common/head') .
            view('common/menuP') .
            view('suculenta/agregar') .
            view('common/footer');
    }
    public function insert()
    {
        $suculentaModel = model('SuculentaModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $suculentaModel->insert($data, false);
        return redirect('suculenta/mostrar', 'refresh');
    }
    public function editar($id_suculenta)
    {
        $suculentaModel = model('SuculentaModel');
        $data['planta_suculentas'] = $suculentaModel->find($id_suculenta);
        return view('common/head') .
            view('common/menuP') .
            view('suculenta/editar',$data) .
            view('common/footer');
    }
    public function update()
    {
        $suculentaModel = model('SucuelentaModel');
        $data = [
            "nombre_planta" => $_POST['nombre_planta'],
            "lugar_origen" => $_POST['lugar_origen'],
            "caracteristicas" => $_POST['caracteristicas'],
            "usos"=>$_POST['usos']

        ];
        $suculentaModel->update($_POST['id_suculenta'], $data);
        return redirect('suculenta/mostrar', 'refresh');
    }
    public function buscar()
    {
        $suculentaModel = model('SuculentaModel');
        if (isset($_GET['nombre_planta'])) {
            $nombre_planta = $_GET['nombre_planta'];
            $lugar_origen = $_GET['lugar_origen'];
            $data['planta_suculentas'] = $suculentaModel->like('nombre_planta', $nombre_planta)
            -> like('lugar_origen',$lugar_origen) ->findAll();
        } else {
            $nombre_planta = "";
            $data['planta_suculentas'] = $suculentaModel->findAll();
        }
        return  view('common/head') .
            view('common/menuP') .
            view('suculenta/buscar',$data) .
            view('common/footer');
    }
    public function delete($id_suculenta)
    {
        $suculentaModel = model('SuculentaModel');
        $suculentaModel->delete($id_suculenta);
        return redirect('suculenta/mostrar', 'refresh');
    }
}
