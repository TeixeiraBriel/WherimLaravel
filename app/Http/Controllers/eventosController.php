<?php

namespace App\Http\Controllers;

use App\Evento;

use Illuminate\Http\Request;

class eventosController extends Controller
{
    public function index()
    {
        $eventos = Evento::get();

        return view('eventos.index', compact('eventos'));
    }
    public function create()
    {
        return view('eventos.create');
    }
    public function store(Request $request)
    {
        $evento = Evento::create($request->all());

        //dd($request);
        return redirect('/eventos');
    }
}
