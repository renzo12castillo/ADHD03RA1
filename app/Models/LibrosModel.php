<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'codigo_libro';
    protected $allowedFields = [
        'codigo_libro', 
        'codigo_autor', 
        'codigo_editorial', 
        'titulo', 
        'precio', 
        'estado', 
    ];
}