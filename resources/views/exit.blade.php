<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics List</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/app-BZT8M1iS.css">

</head>
<body>

    <div id="app">
        <example-component :comics="{{ json_encode($overcomics) }}"></example-component>
    </div>

    @include('partials.header')
    

   
    <h1>Comics List</h1>

    <div class="spazio-fumetti">

        <div class="row">

            <h1>
                OVER list
            </h1>

        </div>

        <div>
            <div class="spazio-fumetti-over">

                <div class="row">
        
                    @foreach ($overcomics as $comic)
                        <div class="col-12 col-sm-4">
                        
                            <div class="fumetti" style="">
                                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                                <div class="card-body">
                                    <h2>{{ $comic['title'] }}</h2>
                                    <p>Price: {{ $comic['price'] }}</p>
                                    <p>Series: {{ $comic['series'] }}</p>
                                    <p>Sale Date: {{ $comic['sale_date'] }}</p>
                                    <p>Type: {{ $comic['type'] }}</p>
                                    <p>Artists: {{ implode(', ', $comic['artists']) }}</p>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
        </div>

         

    </div>

    
        
       
    
</body>
</html>
