<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
       $data = [
        "ingredients" => [
           "Leite",
           "Açúcar",
           "Ovos",
           "Batata",
           "Farinha de trigo",
        ]
       ];
       return view('welcome', $data);
    }
}
