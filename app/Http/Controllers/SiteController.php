<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class SiteController extends Controller
{
    public function index(): View
    {
       $data = [
        'name' => 'Gilberto',
       ];
       return view('welcome', $data);
    }
}
