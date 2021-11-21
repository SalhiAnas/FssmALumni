@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="loading">
            <div>
                <img id="loading-image" src="Assets/uca.png" alt="Loading..." />
            </div>
            <div>
                <h2 id="loading-text">Fssm ALumni Network</h2>
            </div>
            <div class="spinner-border align-content-center" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $(window).load(function() {
            setTimeout(removeLoader,2000);
        });
        function removeLoader() {
            $("#loading").fadeOut(500, function () {
                // fadeOut complete. Remove the loading div
                $("#loading").remove(); //makes page more lightweight
            });
        }
    </script>
</html>
@endsection

