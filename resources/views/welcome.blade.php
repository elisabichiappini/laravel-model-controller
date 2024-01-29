<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
    <!--inclusione assets con direttiva vite-->
    @vite('resources/js/app.js')
    <!--/inclusione assets con direttiva vite-->
</head>
<body class="bg-dark">
    <header class="container py-5">
        <h1 class="text-center text-white">Movies</h1>
    </header>
    <main class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-4 px-0 card border-green mb-3">
                <div class="card-header">
                    <h5 class="text-center">{{ $movie['title']}}</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['original_title']}}</h5>
                    <h6 class="card-title">{{ $movie['date']}}</h6>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $movie['nationality']}}</p>
                        <p class="card-text">{{ $movie['vote']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    
</body>
</html>