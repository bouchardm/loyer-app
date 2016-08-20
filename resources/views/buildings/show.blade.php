@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $building->name }}</div>

                    <div class="panel-body">
                        <img src="{{ Storage::url($building->photo) }}" alt="">
                        <p>
                            {{ $building->address }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Apartments</div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Renters name</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($building->apartments as $apartment)
                                    <tr>
                                        <td>{{ $apartment->no }}</td>
                                        <td>nom</td>
                                        <td>{{ $apartment->price }}</td>
                                        <td><button class="btn btn-success">Detail</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
