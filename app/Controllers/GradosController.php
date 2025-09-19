<?php

namespace App\Controllers;
use App\Models\GradosModel; 

class GradosController extends BaseController
{
    public function index(): string
    {
        $grado = new GradosModel();
        $datos['datos'] = $grado->findAll();
        return view('grados', $datos);
    }

    public function agregar()
    {
        $grado = new GradosModel(); 
        $datos = [
            'codigo_grado' => $this->request->getPost('txt_codigo_add'),
            'nombre' => $this->request->getPost('txt_nombre_add')
        ]; 
        $grado->insert($datos); 
        return $this->index();
    }

    public function eliminar($id)
    {      
        $grado = new GradosModel(); 
        $grado->delete($id); 
        return $this->index(); 
    }

    public function buscar($id)
    {
        $grado = new GradosModel(); 
        $datos['datos'] = $grado->where('codigo_grado', $id)->first(); 
        return view('form_modificar_grados', $datos); 
    }

    public function actualizar()
    {
        $grado = new GradosModel(); 
        $id = $this->request->getPost('txt_id'); 
        $datos = [
            'nombre' => $this->request->getPost('txt_nombre')
        ]; 
        $grado->update($id, $datos); 
        return $this->index(); 
    }
}
