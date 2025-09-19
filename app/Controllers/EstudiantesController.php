<?php

namespace App\Controllers;

use App\Models\EstudiantesModel;
use App\Models\GradosModel;

class EstudiantesController extends BaseController
{
    public function index(): string
    {
        $estudiante = new EstudiantesModel();
        
        $db = \Config\Database::connect();
        $builder = $db->table('estudiantes');
        $builder->select('estudiantes.*, grados.nombre as grado');
        $builder->join('grados', 'estudiantes.codigo_grado = grados.codigo_grado');
        $query = $builder->get();

        $datos['datos'] = $query;

        $grados = new GradosModel();
        $datos['datosGrados'] = $grados->findAll();

        return view('estudiantes', $datos);
    }

    public function agregarEstudiante()
    {
        $estudiante = new EstudiantesModel(); 
        $datos = [
            'carne_alumno' => $this->request->getPost('txt_carne_alumno_add'),
            'nombre' => $this->request->getPost('txt_nombre_add'),
            'apellido' => $this->request->getPost('txt_apellido_add'),
            'direccion' => $this->request->getPost('txt_direccion_add'),
            'telefono' => $this->request->getPost('txt_tel_add'),
            'email' => $this->request->getPost('txt_email_add'),
            'fechanacimiento' => $this->request->getPost('txt_fechanacimiento_add'),
            'codigo_grado' => $this->request->getPost('lst_grado')
        ]; 
        $estudiante->insert($datos); 
        return redirect()->to(base_url('estudiantes'));
    }

    public function eliminar($id)
    {      
        $estudiante = new EstudiantesModel(); 
        $estudiante->delete($id); 
        return redirect()->to(base_url('estudiantes')); 
    }

    public function buscar($id)
    {
        $estudiante = new EstudiantesModel(); 
        $datos['datos'] = $estudiante->where('carne_alumno', $id)->first(); 
        return view('form_modificar_estudiantes', $datos); 
    }

    public function actualizar()
    {
        $estudiante = new EstudiantesModel(); 
        $id = $this->request->getPost('txt_carne_alumno'); 
        $datos = [
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),
            'fechanacimiento' => $this->request->getPost('txt_fecha_nacimiento'),
            'codigo_grado' => $this->request->getPost('txt_codigo_grado')
        ]; 
        $estudiante->update($id, $datos); 
        return redirect()->to(base_url('estudiantes')); 
    }
}