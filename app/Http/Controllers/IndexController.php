<?php

namespace App\Http\Controllers;

use App\Models\Domain;

class IndexController extends Controller
{
    public function index()
    {
        $domains = Domain::all();
        return view('home',  ['domains' => $domains]);
    }
}
