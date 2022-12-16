<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="card-group">
            @forelse ($movies as $Movie)
                
            
                
            
            <div class="card">
              {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
              <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
              <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
              <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          @endforelse
    </div>



</body>

</html>
