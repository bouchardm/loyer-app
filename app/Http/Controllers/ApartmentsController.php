<?php

namespace App\Http\Controllers;

use App\Apartments;
use App\Buildings;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApartmentsController extends Controller
{
    public function create()
    {
        $buildingId = request()->get('building_id');
        return view('apartments.create', compact('buildingId'));
    }

    public function store(Request $request)
    {
        $buildings = Buildings::findOrFail($request->get('building_id'));
        $apartment = new Apartments($request->only(['no', 'price']));
        $apartment->buildings()->associate($buildings);
        $apartment->save();

        return redirect("/apartments/{$apartment->id}");
    }

    public function show($id)
    {
        $apartment = Apartments::findOrFail($id);
        return view('apartments.show', compact('apartment'));
    }
}
