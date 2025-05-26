<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFields = [
        'nombre_prod',
        'imagen',
        'categoria_id',
        'precio',
        'precio_vta',
        'stock',
        'stock_min',
        'eliminado'
    ];
}
