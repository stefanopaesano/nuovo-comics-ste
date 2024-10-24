<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics List</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>Comics List</h1>
    
    <div class="fumetti">
        @foreach ($comics as $comic)
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
            <div class="card-body">
                <h2>{{ $comic['title'] }}</h2>
                <p>{{ $comic['description'] }}</p>
                <p>Price: {{ $comic['price'] }}</p>
                <p>Series: {{ $comic['series'] }}</p>
                <p>Sale Date: {{ $comic['sale_date'] }}</p>
                <p>Type: {{ $comic['type'] }}</p>
                <p>Artists: {{ implode(', ', $comic['artists']) }}</p>
                <p>Writers: {{ implode(', ', $comic['writers']) }}</p>
            </div>
        </div>
            <hr>
        @endforeach

       
    </div>
</body>
</html>
