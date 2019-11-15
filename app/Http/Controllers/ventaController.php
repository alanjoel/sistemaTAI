<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\venta;
use App\producto;
class ventaController extends Controller
{
    public function mostrarProductosMasVendidos()
    {
    	$productos=venta::selectRaw('productos.nombre as Producto, sum(ventas.cantidad) as Venta')
    	->join('productos', 'productos.idProducto','=','ventas.idProducto')
    	->groupBy('Producto')
    	->orderBy('Venta','desc')
    	->get();
    	return $productos;
    }
    public function mostrarProductosPorCliente($cliente)
    {
        $ventas=venta::join('clientes', 'clientes.idCliente','=','ventas.idCliente')
        	->join('productos', 'productos.idProducto','=','ventas.idProducto')
           ->where('clientes.nombre', '=', $cliente)
           ->select('clientes.nombre as Cliente','productos.nombre as ProductsComprados')
           ->get();
        return $ventas;
    }
}
