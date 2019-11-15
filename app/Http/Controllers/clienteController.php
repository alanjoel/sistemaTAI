<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ciudad;
use App\cliente;

class clienteController extends Controller
{
    public function listarClientesPorCiudad()
    {
        $cliente = Cliente::select('clientes.nombre','clientes.ciudad')
    	->get();
    	return $cliente;
    }
    public function mostrarCantClienteCiudad($ciudad)
    {
        $clientes=cliente::where('clientes.ciudad', '=', $ciudad)
           ->select('clientes.nombre','clientes.ciudad')
           ->count('clientes.idCliente');
        return $clientes;
    }
    public function clienteCasero()
    {
        $clientes=cliente::join('ventas', 'ventas.idCliente', '=', 'clientes.idCliente') 
        where(count('clientes.idCliente'))
        ->get();

        return $clientes;

    }
}
