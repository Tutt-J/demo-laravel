<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ServicesController extends Controller
{
    /**
     * Summary of list
     * @return View
     */
    public function list(): View
    {
        $services = Service::all();
        return view('admin.services.list', [
            'services' => $services,
        ]);
    }

    /**
     * Summary of create
     * @return View
     */
    public function create(): View
    {
        return view('admin.services.create');
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

        $service = Service::create([
            'title' => $request->title,
            'icon' => $request->icon,
        ]);
        return redirect()->route('services.list');
    }

    /**
     * Summary of edit
     * @param mixed $id
     * @return View
     */
    public function edit($id): View
    {
        $service = Service::find($id);

        return view('admin.services.edit', ['service' => $service]);
    }

    /**
     * Summary of update
     * @param Request $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $service = Service::find($id);

        $service->title = $request->title;
        $service->icon = $request->icon;

        $service->save();

        return redirect()->route('services.list');
    }

    /**
     * Summary of destroy
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        $service = Service::find($request->id);
        $service->delete();

        return redirect()->route('services.list');
    }
}