<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
       $data = [
        'name' => 'Gilberto',
        'sobre_nome' => "Silva",
       ];
       return view('welcome', $data);
    }

    public function layout()
    {
        return view('site');
    }
}
