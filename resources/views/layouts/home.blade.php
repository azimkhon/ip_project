<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    @include('layouts.partials._head')
<style type="text/css">
    a
    {
        text-decoration: none !important;
    }
    .navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px !important;
    border: 1px solid transparent;
}
.hero-head{
    background-color: #f7f7f7;
    color: #407cc7;
}

.fa-4x
{
    font-size: 4em;
}
.item_text
{

    font-size: 19px;
}
.features
{
    background-color: white;
     color: #407cc7 !important;
}
.sellblock
{
    background-image: url(https://ru.files.fm/images/sell_files_top.jpg);
    height: auto;
}
</style>
    
</head>
<body>
    <div id="app">
        <section class="hero is-primary is-large">
            <div class="hero-head">
                @include('layouts.partials._navigation')
            </div>
            @yield('content')
        </section>
    </div>
    
    <!-- Scripts -->
    @include('layouts.partials._scripts')
</body>
</html>
