<?php

namespace App\Controllers;

use App\Models\EstadosModel;

class EstadosController extends BaseController
{
    public function index(): string
    {
        $estado = new EstadosModel(); 
        $datos['datos'] = $estado->findAll();
        return view('estados', $datos);
    }

    public function agregarEstado()
    {
        $estado = new EstadosModel(); 
        $datos = [
            'codigo_estado' => $this->request->getPost('txt_codigo_estado_add'),
            'nombre' => $this->request->getPost('txt_nombre_add')
        ]; 
        $estado->insert($datos); 
        return redirect()->to(base_url('estados'));
    }

    public function eliminar($id)
    {      
        $estado = new EstadosModel(); 
        $estado->delete($id); 
        return redirect()->to(base_url('estados')); 
    }

    public function buscar($id)
    {
        $estado = new EstadosModel(); 
        $datos['datos'] = $estado->where('codigo_estado', $id)->first(); 
        return view('form_modificar_estados', $datos); 
    }

    public function actualizar()
    {
        $estado = new EstadosModel(); 
        $id = $this->request->getPost('txt_codigo_estado'); 
        $datos = [
            'nombre' => $this->request->getPost('txt_nombre')
        ]; 
        $estado->update($id, $datos); 
        return redirect()->to(base_url('estados')); 
    }
}