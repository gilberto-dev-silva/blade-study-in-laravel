<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
