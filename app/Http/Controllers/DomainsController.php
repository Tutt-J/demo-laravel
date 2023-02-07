<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DomainsController extends Controller
{
    /**
     * Summary of list
     * @return View
     */
    public function list(): View
    {
        $domains = Domain::all();
        return view('admin.domains.list', [
            'domains' => $domains,
        ]);
    }

    /**
     * Summary of create
     * @return View
     */
    public function create(): View
    {
        return view('admin.domains.create');
    }

    /**
     * Summary of store
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'icon' => [
                'required',
                'string',
                'max:50',
            ],
        ]);

        $user = Domain::create([
            'title' => $request->title,
            'icon' => $request->icon,
        ]);
        return redirect()->route('domains.list');
    }

    /**
     * Summary of edit
     * @param mixed $id
     * @return View
     */
    public function edit($id): View
    {
        $domain = Domain::find($id);

        return view('admin.domains.edit', ['domain' => $domain]);
    }

    /**
     * Summary of update
     * @param Request $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $domain = Domain::find($id);

        $domain->title = $request->title;
        $domain->icon = $request->icon;

        $domain->save();

        return redirect()->route('domains.list');
    }

    /**
     * Summary of destroy
     * @param Request $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function destroy(Request $request, $id): RedirectResponse
    {
        $domain = Domain::find($id);
        $domain->delete();

        return redirect()->route('domains.list');
    }
}