<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('feed.navbar')
<br />
<br />
<div class="fastCheck">
<div class="vl">
</div>
@include('feed.fastCheck')
</div>
<br />
<div>
    @include('feed.CreatePost')
</div>
</div>
</div>
</body>
</html>
<style>
    .fastCheck{
        position : absolute;
        right: 180;
    }
    .vl{
        border-right: 0.5px solid grey;
        position : absolute;
        right : 180;
        height: 500px;
    }
</style>