<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos ['cabezera'] = view('cabezera');
        $datos ['footer'] = view('footer');
        return view('inicio',$datos);
    }
    public function servicios()
    {
        $datos ['cabezera'] = view('cabezera');
        $datos ['footer'] = view('footer');
        return view('servicios',$datos);
    }
}
