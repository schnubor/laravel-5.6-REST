<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('partials.nav')

        <div class="container">
            <br>
            <br>
            <div class="card">
            <h5 class="card-header">{{$client->name}} (ID: {{$client->id}})</h5>
            <div class="card-body">
                <h5 class="card-title"><b>Rechtsform:</b> {{$client->rechtsform}}</h5>
                <p class="card-text"><b>Kurztext:</b> {{$client->kurztext}}</p>
                <p class="card-text"><b>Profil:</b> {{$client->profil}}</p>
                <p class="card-text"><b>Status:</b> {{$client->status}}</p>
                <p class="card-text"><b>Kategorie:</b> {{$category->name}}</p>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{ route('clients.edit', $client->id)}}">Edit</a>
                {!! Form::open(['route' => ['clients.destroy', $client->id], 'onsubmit' => 'return confirm(\'Sicher, dass Sie diesen Kunde löschen möchten?\')', 'style' => 'display: inline;']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                {!! Form::close() !!}
            </div>
            </div>
            <br>
        </div>
    </body>
</html>
