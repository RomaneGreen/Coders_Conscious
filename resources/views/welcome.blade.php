<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center">Bahdcoder's blog</h2>
        <div class="row">
            <div class="col-md-8 my-5 offset-md-2">
                @foreach($posts as $post)
                    <div class="card my-5">
                        <img src="{{ asset($post->image) }}" style="max-height: 340px;" alt="" class="card-img-top">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            {{ $post->content }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
