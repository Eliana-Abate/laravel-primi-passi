<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <header>
        <h1> {{ $saluto }}</h1>
        <hr>

        
        <nav>
            @foreach ($navbar as $link => $value)
            <a href="{{route($link)}}"> {{$value}}</a> 
            @endforeach
        </nav>
    </header>
    

    
</body>
</html>