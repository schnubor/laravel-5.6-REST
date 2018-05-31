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
            <h2>Kunde bearbeiten</h2>
            <br>
            {!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientController@update', $client->id]]) !!}
            <div class='form-group'>
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('rechtsform', 'Rechtsform:') !!}
                    {!! Form::text('rechtsform', null, ['class' => 'form-control', 'placeholder' => 'Rechtsform']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('unterzeile', 'Unterzeile:') !!}
                    {!! Form::text('unterzeile', null, ['class' => 'form-control', 'placeholder' => 'Unterzeile']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('kurztext', 'Kurztext:') !!}
                    {!! Form::text('kurztext', null, ['class' => 'form-control', 'placeholder' => 'Kurztext']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('profil', 'Profil:') !!}
                    {!! Form::textarea('profil', null, ['class' => 'form-control', 'placeholder' => 'Profil']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::checkbox('status', '1', ['class' => 'form-control', 'placeholder' => 'Status']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('category_id', 'Kategorie:') !!}
                    {!! Form::select('category_id', $catArray, null, ['class' => 'form-control', 'placeholder' => 'Kategorie']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </body>
</html>
