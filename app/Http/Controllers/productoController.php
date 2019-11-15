<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use App\producto;

class productoController extends Controller
{
    public function edit($id)
    {
        //
    }
    public function mostrarProductosPorCategoria($categoria)
    {
        $productos=producto::join('categorias', 'productos.idCategoria', '=', 'categorias.idCategoria') 
            ->where('categorias.nombre', '=', $categoria)
            ->get();
        return $productos;
    }
    public function mostrarProductosManaco($proveedor)
    {
        $productos=producto::join('proveedors', 'proveedors.idProveedor', '=', 'productos.idProveedor') 
            ->where('proveedors.nombre', '=', $proveedor)
            ->get();
        return $productos;
    }

}
