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
                    <button class="btn btn-default">Associer un locataire</button>
                    <button class="btn btn-success">Créer un locataire</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
