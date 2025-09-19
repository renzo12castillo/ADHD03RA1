<?php

namespace App\Controllers;

use App\Models\PrestamosModel;
use App\Models\EmpleadosModel; 

class PrestamosController extends BaseController
{
    public function index(): string
    {
        $prestamo = new PrestamosModel();
        
        $db = \Config\Database::connect();
        $builder = $db->table('prestamos');
        $builder->select("prestamos.*, CONCAT(empleados.nombre, ' ', empleados.apellido) as Empleado");
        $builder->join('empleados', 'empleados.codigo_empleado = prestamos.codigo_empleado');
        $query = $builder->get();

        $datos['datos'] = $query;

        $empleado = new EmpleadosModel();
        $datos['datosEmpleados'] = $empleado->findAll();

        return view('prestamos', $datos);
    }

    public function agregarPrestamo()
    {
        $prestamo = new PrestamosModel(); 
        $datos = [
            'numero_prestamo' => $this->request->getPost('txt_numero_prestamo_add'),
            'codigo_libro' => $this->request->getPost('txt_codigo_libro_add'),
            'carne_alumno' => $this->request->getPost('txt_carne_alumno_add'),
            'fecha_prestamo' => $this->request->getPost('txt_fecha_prestamo_add'),
            'fecha_devolucion' => $this->request->getPost('txt_fecha_devolucion_add'),
            'codigo_empleado' => $this->request->getPost('lst_empleado')
        ]; 
        $prestamo->insert($datos); 
        return redirect()->to(base_url('prestamos'));
    }

    public function eliminar($id)
    {      
        $prestamo = new PrestamosModel(); 
        $prestamo->delete($id); 
        return redirect()->to(base_url('prestamos')); 
    }  

    public function buscar($id)
{
    $prestamo = new PrestamosModel(); 
    $empleado = new EmpleadosModel(); 

    $datos['datos'] = $prestamo->where('numero_prestamo', $id)->first(); 
    $datos['datosEmpleados'] = $empleado->findAll(); 

    return view('form_modificar_prestamos', $datos); 
}


    public function actualizar()
    {
        $id = $this->request->getPost('txt_numero_prestamo_mod');
        $prestamo = new PrestamosModel(); 
        $datos = [
            'codigo_libro' => $this->request->getPost('txt_codigo_libro_mod'),
            'carne_alumno' => $this->request->getPost('txt_carne_alumno_mod'),
            'fecha_prestamo' => $this->request->getPost('txt_fecha_prestamo_mod'),
            'fecha_devolucion' => $this->request->getPost('txt_fecha_devolucion_mod'),
            'codigo_empleado' => $this->request->getPost('lst_empleado_mod')
        ]; 
        $prestamo->update($id, $datos); 
        return redirect()->to(base_url('prestamos')); 
    }

}