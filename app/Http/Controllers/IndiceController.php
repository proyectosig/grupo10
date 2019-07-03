<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndiceController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view("tactico.index");
    }

    public function index2()
    {
        return view("seguridad.index");
    }

    public function index3()
    {
        return view("estrategico.index");
    }
}
