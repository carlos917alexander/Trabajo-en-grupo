<?php

namespace App\Controllers;

class Servicios extends BaseController
{
    public function index()
    {
        # code...
    }

    public function list()
    {
        $services = model('Servicios');
        $data ['servicios'] = $services->orderBy('ID_SERVICIOS', 'ASC')->findAll();
        $data ['cabezera'] = view('cabezera');
        $data ['footer'] = view('footer');
        return view('servicios/list', $data);   
    }

    public function add()
    {
        $data ['cabezera'] = view('cabezera');
        $data ['footer'] = view('footer');
        return view('servicios/add',$data);
    }

    public function save()
    {
        $guardar = model('Servicios');

        if (!$this->validate([
            "PROPETARIO"        => 'required',
            "VACUNAS"           => 'required',
            "PELUQUERIA"        => 'required',
            "DESPARACITACION"   => 'required',
            "CASTRACION"        => 'required',
            "OPERACION"         => 'required'
        ])) {
            return redirect()->back()->with('msg', [
                "type" => "danger",
                "body" => "¡Los campos deben estar llenos!"
            ])->withInput();
        }
        
        if (!empty($_GET["ID"])) {
            if ($guardar->where('ID_SERVICIOS', $_GET["ID"])->first() > 1) $guardar->update($_GET['ID'], $_POST);
        } else {
            $guardar->insert($_POST);
        }
        

        return redirect('Servicios-listar')->with('msg',[
            "type" => "info",
            "body" => "¡Datos Guardados!"
        ]);
    }


    public function edition()
    {
        $services = model('Servicios');
        $data ['cabezera'] = view('cabezera');
        $data ['footer'] = view('footer');
        $data["mascota"] = $services->where('ID_SERVICIOS', $_GET['ID'])->first();

        return view('servicios/edition', $data);
    }

    public function delete()
    {
        $delete = model ('Servicios');
        $delete->delete($_GET['ID']);
        return redirect('Servicios-listar')->with('msg', [
            "type" => "danger",
            "body" => "¡Provincia Eliminada!"
        ]);
    }
}
