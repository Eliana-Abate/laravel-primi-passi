<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatti</title>
</head>
<body>
    <header>
        <h1>{{$title}}</h1>

        <nav>
            @foreach ($navbar as $link => $value)
            <a href="{{route($link)}}"> {{$value}}</a> 
            @endforeach
        </nav>

        <hr>
    </header>

    <main>
        <h3>Info and contacts:</h3>
        <p>Email: asdfghj@net.com</p>
        <p>Phone:09876/3456789</p>
    </main>
    
</body>
</html>