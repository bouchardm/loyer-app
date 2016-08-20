@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Apartment</div>
                <div class="panel-body">
                    <p>No: {{ $apartment->no }}</p>
                    <p>Price: {{ $apartment->price }}</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Locataire</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" class="form-inline">
                                <input type="hidden" name="apartment_id" value="{{ $apartment->id }}">
                                <select name="renter_id" class="form-control">
                                    <option value="1">sdfsdf</option>
                                    <option value="2">sdfsdf</option>
                                    <option value="3">sdfsdf</option>
                                </select>
                                <button class="btn btn-default form-control">Associer un locataire</button>
                            </form>
                        </div>
                        <div class="col-md-1 text-center">
                            <strong>ou</strong>
                        </div>
                        <div class="col-md-5 text-right">
                            <form action="" class="form-inline">
                                <input type="hidden" name="apartment_id" value="{{ $apartment->id }}">
                                <button class="btn btn-success form-control">Créer un locataire</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Locataire</div>
                <div class="panel-body">
                    <p>Nom: salut</p>
                    <p>Photo: </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
