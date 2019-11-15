<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use App\producto;

class productoController extends Controller
{
    
    public function mostrarProductosPorCategoria($categoriaa)
    {
        $productos=producto::join('categorias', 'productos.idCategoria', '=', 'categorias.idCategoria')
         ->where('categorias.nombre', '=', $categoriaa)
            ->get();

        return $productos;
    }
    public function mostrarProductosManaco()
    {
        $productos=producto::join('proveedors', 'proveedors.idProveedor', '=', 'productos.idProveedor')
        	->select('productos.nombre','productos.precioActual','productos.stock','productos.idCategoria','productos.idProveedor')
            ->where('proveedors.nombre', '=', 'Manaco')
            ->get();
        return $productos;
    }
    public function mostrarProductosStock()
    {
        $productos=producto::select('productos.idProducto', 'productos.nombre','productos.precioActual','productos.Stock','productos.idCategoria','productos.idProveedor')
            ->orderBy('stock','desc')
            ->get();
        return $productos;
    }

}
