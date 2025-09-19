<?php

namespace App\Controllers;

use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function index(): string
    {
        $autor = new AutoresModel(); 
        $datos['datos'] = $autor->findAll();
        return view('autores', $datos);
    }

    public function agregarAutor()
    {
        $autor = new AutoresModel(); 
        $datos = [
            'codigo_autor' => $this->request->getPost('txt_codigo_autor_add'),
            'nombre' => $this->request->getPost('txt_nombre_add'),
            'apellido' => $this->request->getPost('txt_apellido_add'),
            'nacionalidad' => $this->request->getPost('txt_nacionalidad_add')
        ]; 
        $autor->insert($datos); 
        return redirect()->to(base_url('autores'));
    }

    public function eliminar($id)
    {      
        $autor = new AutoresModel(); 
        $autor->delete($id); 
        return redirect()->to(base_url('autores')); 
    }

    public function buscar($id)
    {
        $autor = new AutoresModel(); 
        $datos['datos'] = $autor->where('codigo_autor', $id)->first(); 
        return view('form_modificar_autores', $datos); 
    }

    public function actualizar()
    {
        $autor = new AutoresModel(); 
        $id = $this->request->getPost('txt_codigo_autor'); 
        $datos = [
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'nacionalidad' => $this->request->getPost('txt_nacionalidad')
        ]; 
        $autor->update($id, $datos); 
        return redirect()->to(base_url('autores')); 
    }

}