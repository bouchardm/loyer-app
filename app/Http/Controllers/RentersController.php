<?php

namespace App\Http\Controllers;

use App\Apartments;
use App\Http\Requests\StoreRenterRequest;
use App\Renter;
use Illuminate\Http\Request;

use App\Http\Requests;

class RentersController extends Controller
{
    public function create()
    {
        $apartmentId = request()->get('apartment_id');
        return view('renter.create', compact('apartmentId'));
    }

    public function store(StoreRenterRequest $request)
    {
        /** @var Apartments $apartment */
        $apartment = Apartments::findOrFail($request->get('apartment_id'));

        $renter = new Renter($request->only('name'));
        $renter->photo = str_replace('public', '', $request->file('photo')->store('public/renter'));
        $renter->apartments()->associate($apartment);
        $renter->save();

        $apartment->renter()->associate($renter);
        $apartment->save();

        return redirect("/apartments/{$apartment->id}");
    }
}
