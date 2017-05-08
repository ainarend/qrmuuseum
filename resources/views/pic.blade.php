@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $expo->name }}</div>

                <div class="panel-body">
                    <p>{{ $expo->description }}</p>
                    <img src="{{ $expo->picture }}" />
                    <div style="display: block">
                        <input type="checkbox"> Salvesta
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
