<?php

namespace App\Controllers;

class Mascota extends BaseController
{
    public function index()
    {
        # code...
    }

    public function list()
    {
        $mascotas = model('Mascota');
        $data ['cabezera'] = view('cabezera');
        $data ['footer'] = view('footer');
        $data ['mascota'] = $mascotas->orderBy('ID_MASCOTA', 'ASC')->findAll();
        return view('mascota/list', $data);   
    }

    public function add()
    {
        $data ['cabezera'] = view('cabezera');
        $data ['footer'] = view('footer');
        return view('mascota/add',$data);
    }

    public function save()
    {
        $guardar = model('Mascota');

        if (!$this->validate([
            "PROPETARIO"        => 'required',
            "MASCOTA"           => 'required',
            "RAZA"              => 'required',
            "CARNET_VACUNA"     => 'required'
        ])) 
        
        {
            return redirect()->back()->with('msg', [
                "type" => "danger",
                "body" => "¡Los campos deben estar llenos!"
            ])->withInput();
        }
        
        if (!empty($_GET["ID"])) {
            if ($guardar->where('ID_MASCOTA', $_GET["ID"])->first() > 1) $guardar->update($_GET['ID'], $_POST);
        } else {
            $guardar->insert($_POST);
        }
        

        return redirect('Mascota-listar')->with('msg',[
            "type" => "info",
            "body" => "¡Datos Guardados!"
        ]);
    }

    public function edition()
    {
        $mascotas = model('Mascota');
        $data ['cabezera'] = view('cabezera');
        $data ['footer'] = view('footer');
        $data["mascota"] = $mascotas->where('ID_MASCOTA', $_GET['ID'])->first();

        return view('mascota/edition', $data);
    }

    public function delete()
    {
        $delete = model ('Mascota');
        $delete->delete($_GET['ID']);
        return redirect('Mascota-listar')->with('msg', [
            "type" => "danger",
            "body" => "¡Provincia Eliminada!"
        ]);
    }
}
