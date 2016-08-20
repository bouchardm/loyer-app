@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-right">
                    <a class="btn btn-success" href="/buildings/create">Plus</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach ($buildings as $building)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $building->name }}</div>

                        <div class="panel-body">
                            <img src="{{ Storage::url($building->photo) }}" alt="">
                            <p>
                                {{ $building->address }}
                            </p>
                            <a class="btn btn-success" href="{{ url('/buildings', ['id' => $building->id]) }}">Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
