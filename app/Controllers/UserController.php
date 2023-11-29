<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
       $data['title'] = "Usuario";
        $validation =  \Config\Services::validation();

        if (session()->get('id_usuario')) {
            // Usuario ya autenticado, redirigir a la página deseada
            return redirect()->to('menus/menudo');
        }

        if (strtolower($this->request->getMethod()) === 'post') {
            $rules = [
                'nombre_usuario' => 'required',
                'contrasena' => 'required',
                'email'=>'required'
            ];

            if (!$this->validate($rules)) {
                return view('usuario/login');
            }

            $nombre_usuario = $this->request->getPost('nombre_usuario');
            $contrasena = $this->request->getPost('contrasena');
            $userModel = model('UserModel'); 
            $usuario = $userModel->where('nombre_usuario', $nombre_usuario)
                                   ->where('contrasena', $contrasena)
                                   ->findAll();

            if ($usuario) {
                session()->setFlashdata('mensaje', '¡Inicio de sesión exitoso!');
                return redirect()->to('menus/menudo');
            } else {
                $data1 ['mensaje'] = 'Error: Nombre o contraseña incorrectos.';
                return view('usuario/login',$data1);
            }
        }
        return view('usuario/login');   
}
}