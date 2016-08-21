@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Apartment</div>
                <div class="panel-body">
                    <p>Building: <a href="{{ url('/buildings/' . $apartment->buildings->id) }}">{{ $apartment->buildings->name }}</a></p>
                    <p>No: {{ $apartment->no }}</p>
                    <p>Price: {{ $apartment->price }}</p>
                </div>
            </div>

            @if ($apartment->renter == null)
                <div class="panel panel-default">
                    <div class="panel-heading">Locataire</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ url('/apartments/' . $apartment->id) }}" class="form-horizontal" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="apartment_id" value="{{ $apartment->id }}">
                                    <select name="renter_id" class="form-control">
                                        @foreach ($renters as $renter)
                                            <option value="{{ $renter->id }}">{{ $renter->name }}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-default form-control">Associer un locataire</button>
                                </form>
                            </div>
                            <div class="col-md-1 text-center">
                                <strong>ou</strong>
                            </div>
                            <div class="col-md-5 text-right">
                                <form action="{{ url('/renters/create') }}" class="form-horizontal">
                                    <input type="hidden" name="apartment_id" value="{{ $apartment->id }}">
                                    <button class="btn btn-success form-control">Créer un locataire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="panel panel-default">
                    <div class="panel-heading">Locataire</div>
                    <div class="panel-body">
                        <p>Nom: {{ $apartment->renter->name }}</p>
                        <p>Photo: <img src="{{ Storage::url($apartment->renter->photo) }}" alt=""></p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
