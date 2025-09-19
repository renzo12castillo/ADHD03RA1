<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/* RUTAS GRADOS */

$routes->get('grados', 'GradosController::index');
$routes->get('menu', 'Home::index');
$routes->post('agregarGrado', 'GradosController::agregar');
$routes->get('eliminar_grado/(:num)', 'GradosController::eliminar/$1');
$routes->get('buscar_grado/(:num)', 'GradosController::buscar/$1');
$routes->post('actualizar_grado', 'GradosController::actualizar');

/* RUTAS ESTUDIANTES */
$routes->get('estudiantes', 'EstudiantesController::index');
$routes->post('agregarEstudiante', 'EstudiantesController::agregarEstudiante');
$routes->get('eliminar_estudiante/(:num)', 'EstudiantesController::eliminar/$1');
$routes->get('buscar_estudiante/(:num)', 'EstudiantesController::buscar/$1');
$routes->post('actualizar_estudiante', 'EstudiantesController::actualizar');

/* RUTAS PRESTAMOS */ 
$routes->get('prestamos', 'PrestamosController::index');
$routes->post('agregarPrestamo', 'PrestamosController::agregarPrestamo');
$routes->get('eliminar_prestamo/(:num)', 'PrestamosController::eliminar/$1');
$routes->get('buscar_prestamo/(:num)', 'PrestamosController::buscar/$1');
$routes->post('actualizar_prestamo', 'PrestamosController::actualizar');

/* RUTAS LIBROS */

$routes->get('libros', 'LibrosController::index');
$routes->post('agregarLibro', 'LibrosController::agregarLibro');
$routes->get('eliminar_libro/(:num)', 'LibrosController::eliminar/$1');
$routes->get('buscar_libro/(:num)', 'LibrosController::buscar/$1');
$routes->post('actualizar_libro', 'LibrosController::actualizar');

/* RUTAS EMPLEADOS */
$routes->get('empleados', 'EmpleadosController::index');
$routes->post('agregarEmpleado', 'EmpleadosController::agregarEmpleado');
$routes->get('eliminar_empleado/(:num)', 'EmpleadosController::eliminar/$1');
$routes->get('buscar_empleado/(:num)', 'EmpleadosController::buscar/$1');
$routes->post('actualizar_empleado', 'EmpleadosController::actualizar');

/* RUTAS ESTADOS */
$routes->get('estados', 'EstadosController::index');
$routes->post('agregarEstado', 'EstadosController::agregarEstado');
$routes->get('eliminar_estado/(:num)', 'EstadosController::eliminar/$1');
$routes->get('buscar_estado/(:num)', 'EstadosController::buscar/$1');
$routes->post('actualizar_estado', 'EstadosController::actualizar'); 

/* RUTAS AUTORES */
$routes->get('autores', 'AutoresController::index');
$routes->post('agregarAutor', 'AutoresController::agregarAutor');
$routes->get('eliminar_autor/(:num)', 'AutoresController::eliminar/$1');
$routes->get('buscar_autor/(:num)', 'AutoresController::buscar/$1');
$routes->post('actualizar_autor', 'AutoresController::actualizar');

/* RUTAS EDITORIALES */
$routes->get('editoriales', 'EditorialesController::index');
$routes->post('agregarEditorial', 'EditorialesController::agregarEditorial');
$routes->get('eliminar_editorial/(:num)', 'EditorialesController::eliminar/$1');
$routes->get('buscar_editorial/(:num)', 'EditorialesController::buscar/$1');
$routes->post('actualizar_editorial', 'EditorialesController::actualizar');