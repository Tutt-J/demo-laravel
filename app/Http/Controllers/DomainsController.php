<?php

namespace App\Http\Controllers;

use App\Models\Domain;

class DomainsController extends Controller
{
    public function list()
    {
        $domains = Domain::all();
        return view('admin.domains',  [
            'domains' => $domains,
        ]);
    }
}
