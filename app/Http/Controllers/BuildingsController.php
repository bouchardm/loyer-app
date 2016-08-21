<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BuildingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $buildings = \App\Buildings::latest()->get();
        return view('buildings.list', compact('buildings'));
    }

    public function create()
    {
        return view('buildings.create');
    }

    public function store(Requests\BuildingsCreateRequest $request)
    {
        $building = new \App\Buildings(request()->only(['name', 'address']));
        $building->photo = str_replace('public', '', request()->file('photo')->store('public/buildings'));
        $building->save();

        return redirect("/buildings/{$building->id}");
    }

    public function show($id)
    {
        $building = \App\Buildings::with('apartments')->findOrFail($id);
        return view('buildings.show', compact('building'));
    }

}
