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
    <body>
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

        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top py-3">
                <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Fssm Alumni</a>
                    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Portfolio</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="background"></div>
                    <div class="toplayer">
                    <div class="carousel-caption">
                        <h1 class="display-3 title">Fssm alumni network</h1>
                        <h1 class="display-5 desc">Earn your confidence, nurture it, then help to build it in others.</h1>
                        <a href="#"><button type="button"  class="btn btn-outline-light btn-lg">Join Us !</button></a>
                    </div>
                    </div>

                </div>
                </div>
        </div>


<div style="margin-bottom: 300px">
    hhhhhhhhh
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
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 10 ) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>
</html>
@endsection

