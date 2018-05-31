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
            <h2>Kategorien</h2>
            <br>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Neue Kategorie</a>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>
                            <a href="{{route('categories.show', $category->id)}}">
                                {{$category->name}}
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category->id)}}">Edit</a>
                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'onsubmit' => 'return confirm(\'Sicher, dass Sie diese Kategorie löschen möchten?\')', 'style' => 'display: inline;']) !!}
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
