<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
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

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: 1} 
  to {opacity: 9}
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: 9}
}
</style>
    
</head>
<body>
    <div id="app">
        @include('layouts.partials._navigation')
        

            @yield('content')
    </div>
    
    <!-- Scripts -->
    @include('layouts.partials._scripts')
</body>
</html>
