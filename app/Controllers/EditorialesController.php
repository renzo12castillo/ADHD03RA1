<?php

namespace App\Controllers;

use App\Models\EditorialesModel;
use App\Models\EstadosModel;

class EditorialesController extends BaseController
{
    public function index(): string
    {
        $editorial = new EditorialesModel(); 
        $datos['datos'] = $editorial->findAll();
        return view('editoriales', $datos);
    }

    public function agregarEditorial()
    {
        $editorial = new EditorialesModel(); 
        $datos = [
            'codigo_editorial' => $this->request->getPost('txt_codigo_editorial_add'),
            'nombre' => $this->request->getPost('txt_nombre_add'),
            'direccion' => $this->request->getPost('txt_direccion_add'),
            'telefono' => $this->request->getPost('txt_telefono_add'),
            'email' => $this->request->getPost('txt_email_add')
        ]; 
        $editorial->insert($datos); 
        return redirect()->to(base_url('editoriales'));
    }

    public function eliminar($id)
    {      
        $editorial = new EditorialesModel(); 
        $editorial->delete($id); 
        return redirect()->to(base_url('editoriales')); 
    }

    public function buscar($id)
    {
        $editorial = new EditorialesModel(); 
        $datos['datos'] = $editorial->where('codigo_editorial', $id)->first(); 
        return view('form_editar_editoriales', $datos); 
    }

    public function actualizar()
    {
        $editorial = new EditorialesModel(); 
        $id = $this->request->getPost('txt_codigo_editorial'); 
        $datos = [
            'nombre' => $this->request->getPost('txt_nombre'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email')
        ]; 
        $editorial->update($id, $datos); 
        return redirect()->to(base_url('editoriales')); 
    }

}