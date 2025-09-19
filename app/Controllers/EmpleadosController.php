<?php

namespace App\Controllers;

use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
    public function index(): string
    {
        $empleado = new EmpleadosModel();
        $datos['datos'] = $empleado->findAll();
        return view('empleados', $datos); 
    }

    public function agregarEmpleado()
    {
        $empleado = new EmpleadosModel(); 
        $datos = [
            'codigo_empleado' => $this->request->getPost('txt_codigo_empleado_add'),
            'nombre' => $this->request->getPost('txt_nombre_add'),
            'apellido' => $this->request->getPost('txt_apellido_add'),
            'direccion' => $this->request->getPost('txt_direccion_add'),
            'email' => $this->request->getPost('txt_email_add')
        ]; 
        $empleado->insert($datos); 
        return redirect()->to(base_url('empleados'));
    }

    public function eliminar($id)
    {      
        $empleado = new EmpleadosModel(); 
        $empleado->delete($id); 
        return redirect()->to(base_url('empleados')); 
    }

    public function buscar($id)
    {
        $empleado = new EmpleadosModel(); 
        $datos['datos'] = $empleado->where('codigo_empleado', $id)->first(); 
        return view('form_modificar_empleados', $datos); 
    }

    public function actualizar()
    {
        $empleado = new EmpleadosModel(); 
        $id = $this->request->getPost('txt_codigo_empleado'); 
        $datos = [
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'email' => $this->request->getPost('txt_email')
        ]; 
        $empleado->update($id, $datos); 
        return redirect()->to(base_url('empleados')); 
    }
}