<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Service;

class IndexController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $domains = Domain::all();
        $services = Service::all();
        return view('home',  [
            'domains' => $domains,
            'services' => $services
        ]);
    }
}
