<?php

namespace App\Http\Controllers;

use App\Apartments;
use App\Buildings;
use App\Http\Requests\StoreApartementRequest;
use App\Renter;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApartmentsController extends Controller
{
    public function create()
    {
        $buildingId = request()->get('building_id');
        return view('apartments.create', compact('buildingId'));
    }

    public function store(StoreApartementRequest $request)
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
        $renters = Renter::all();
        return view('apartments.show', compact('apartment', 'renters'));
    }

    public function update($id)
    {
        /** @var Renter $renter */
        $renter = Renter::findOrFail(request()->get('renter_id'));
        /** @var Apartments $apartment */
        $apartment = Apartments::findOrFail($id);

        $renter->apartments()->associate($apartment);
        $apartment->renter()->associate($renter);

        $apartment->save();
        $renter->save();

        return redirect("/apartments/{$id}");
    }
}
