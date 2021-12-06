<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
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
<div class="container">
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