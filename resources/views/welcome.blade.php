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
            <div class="col-3 px-0 card border-green mb-3">
                <div class="card-header">{{ $movie['title']}}</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    
</body>
</html>