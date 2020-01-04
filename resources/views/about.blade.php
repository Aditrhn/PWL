@extends('header')

@section('main_content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    </head>
    <body class="container">
        <h1>Ini adalah halamat About</h1>
        <p>created by : {{ $nama }}</p>

        <ul>
            @foreach($buku as $key=>$value)
            <li>
                {{ $key }} -

                @if($value > 50)
                    <span class="badge badge-success">{{ $value }} </span>
                @else
                    <span class="badge badge-info">{{ $value }} </span>
                @endif
            </li>
            @endforeach
        </ul>

    </body>
</html>
@stop
