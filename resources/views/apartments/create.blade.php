@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New apartment</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/apartments') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <input type="hidden" name="building_id" value="{{ $buildingId }}">

                        <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                            <label for="no" class="col-md-4 control-label">No</label>

                            <div class="col-md-6">
                                <input id="no" type="text" class="form-control" name="no" value="{{ old('no') }}" autofocus>

                                @if ($errors->has('no'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}">

                                @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Créer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
