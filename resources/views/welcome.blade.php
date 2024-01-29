<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
    {{--fontawesome--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--/fontawesome--}}
    {{--inclusione assets con direttiva vite--}}
    @vite('resources/js/app.js')
    {{--/inclusione assets con direttiva vite--}}
</head>
<body class="bg-dark">
    <header class="container py-5">
        <h1 class="text-center text-white">Movies</h1>
    </header>
    <main class="container">
        <div class="row d-flex gap-4">
            @foreach ($movies as $movie)
            <div class="card border-green mb-3">
                <div class="card-header">
                    <h5 class="fw-bolder text-center ec-pink">{{ $movie['title']}}</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Original title: {{ $movie['original_title']}}</h5>
                    <h6 class="card-title">{{ $movie['date']}}</h6>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $movie['nationality']}}</p>
                        <p class="card-text"><i class="fa-solid fa-star ec-pink"></i> {{ $movie['vote']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    
</body>
</html>