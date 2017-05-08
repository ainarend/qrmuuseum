@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $expo->name }}</div>

                <div class="panel-body">
                    {{ $expo->description }}
                    <h3>{{ $expo->question }}</h3>
                    <label style="display: block">{{ $expo->answer1 }}: <input type="radio"></label>
                    <label style="display: block">{{ $expo->answer2 }}: <input type="radio"></label>
                    <label style="display: block">{{ $expo->answer3 }}: <input type="radio"></label>
                    <label style="display: block">{{ $expo->answer4 }}: <input type="radio"></label>
                    <button>Salvesta</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
