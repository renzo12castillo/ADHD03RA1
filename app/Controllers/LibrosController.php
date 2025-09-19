<?php

namespace App\Controllers;

use App\Models\LibrosModel;
use App\Models\EstadosModel;
use App\Models\EditorialesModel; 

class LibrosController extends BaseController
{
    public function index(): string
    {
        $libro = new LibrosModel();
        
        $db = \Config\Database::connect();
        $builder = $db->table('libros');
        $builder->select("libros.*, editoriales.nombre as Editorial");
        $builder->join('editoriales', 'libros.codigo_editorial = editoriales.codigo_editorial');
        $builder->join('estados', 'libros.estado = estados.codigo_estado');
        $query = $builder->get();

        $datos['datos'] = $query;

        $estado = new EstadosModel();
        $datos['datosEstados'] = $estado->findAll();

        $editorial = new EditorialesModel();
        $datos['datosEditoriales'] = $editorial->findAll();

        return view('libros', $datos);
    }

    public function agregarLibro()
    {
        $libro = new LibrosModel();

        $datos = [
            'codigo_libro' => $this->request->getVar('txt_codigo_libro_add'),
            'codigo_autor' => $this->request->getVar('txt_codigo_autor_add'),
            'codigo_editorial' => $this->request->getVar('lst_editorial_add'),
            'titulo' => $this->request->getVar('txt_titulo_add'),
            'precio' => $this->request->getVar('txt_precio_add'),
            'estado' => $this->request->getVar('lst_estado'),
        ];

        $libro->insert($datos);
        return $this->response->redirect(site_url('/libros'));
    }

    public function eliminar($id)
    {      
        $libro = new LibrosModel(); 
        $libro->delete($id); 
        return redirect()->to(base_url('libros')); 
    }

    public function buscar($id)
    {
        $libro = new LibrosModel(); 
        $estado = new EstadosModel(); 
        $editorial = new EditorialesModel(); 

        $datos['datos'] = $libro->where('codigo_libro', $id)->first(); 
        $datos['datosEstados'] = $estado->findAll(); 
        $datos['datosEditoriales'] = $editorial->findAll(); 

        return view('form_modificar_libros', $datos); 
    }

    public function actualizar()
    {
        $id = $this->request->getPost('txt_codigo_libro_mod');
        $libro = new LibrosModel(); 
        $datos = [
            'codigo_autor' => $this->request->getPost('txt_codigo_autor_mod'),
            'codigo_editorial' => $this->request->getPost('lst_editorial_mod'),
            'titulo' => $this->request->getPost('txt_titulo_mod'),
            'precio' => $this->request->getPost('txt_precio_mod'),
            'estado' => $this->request->getPost('lst_estado_mod')
        ]; 
        $libro->update($id, $datos); 
        return redirect()->to(base_url('libros')); 
    }

}