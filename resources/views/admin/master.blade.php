<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>{{$title}}</title>
        <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{$title}}
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Conatct Us</a></li>
        </ul>
        <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
<div class="alert alert-primary" role="alert">
  This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
        <script src="{{ mix('assets/js/app.js') }}"></script>
    </body>
</html>
