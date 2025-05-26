<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $productos = $productoModel->where('eliminado', 'NO')->findAll();

        return view('productos', ['productos' => $productos]);
    }
}
