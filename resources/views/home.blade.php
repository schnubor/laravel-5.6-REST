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
            <br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Kunden</div>
                        <div class="card-body">
                            <p class="card-text">Eine Übersicht über alle Kunden.</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('clients.index') }}" class="btn btn-light btn-sm">Ansehen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Kategorien</div>
                        <div class="card-body">
                            <p class="card-text">Eine Übersicht über alle Kategorien.</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('categories.index') }}" class="btn btn-light btn-sm">Ansehen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
