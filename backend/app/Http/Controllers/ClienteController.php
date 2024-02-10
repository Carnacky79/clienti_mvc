<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $c = new Cliente();
        return $c->all();
    }
}
