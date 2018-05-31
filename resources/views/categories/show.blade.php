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
            <h2>{{ $category->name }}</h2>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Rechtsform</th>
                        <th scope="col">Unterzeile</th>
                        <th scope="col">Kurztext</th>
                        <th scope="col">Profil</th>
                        <th scope="col">Status</th>
                        <th scope="col">Kategorie ID</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row">{{$client->id}}</th>
                            <td>{{$client->name}}</td>
                            <td>{{$client->rechtsform}}</td>
                            <td>{{$client->unterzeile}}</td>
                            <td>{{$client->kurztext}}</td>
                            <td>{{$client->profil}}</td>
                            <td>{{$client->status}}</td>
                            <td>{{$client->category_id}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('clients.edit', $client->id)}}">Edit</a>
                                {!! Form::open(['route' => ['clients.destroy', $client->id], 'onsubmit' => 'return confirm(\'Sicher, dass Sie diesen Kunde löschen möchten?\')', 'style' => 'display: inline;']) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::button('Delete', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
