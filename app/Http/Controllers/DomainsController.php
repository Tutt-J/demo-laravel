<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DomainsController extends Controller
{
    public function list()
    {
        $domains = Domain::all();
        return view('admin.domains.list',  [
            'domains' => $domains,
        ]);
    }

    public function create(): View
    {
        return view('admin.domains.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'max:50',],
        ]);

        $user = Domain::create([
            'title' => $request->title,
            'icon' => $request->icon,
        ]);
        return redirect()->route('domains.list');
    }

    public function destroy(Request $request, $id): RedirectResponse
    {
        $domain = Domain::find($id);
        $domain->delete();

        return redirect()->route('domains.list');
    }
}
