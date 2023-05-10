<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $article->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<x-header />

    <div class="container-fluid">
        <main class="tm-main">
            <div class="row tm-row">
                <div class="col-12">
                    <form action="{{ route('article.destroy', $article->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="tm-btn tm-btn-primary tm-btn-small" type="submit">Delete</button> 
                    </form>
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-30">
                    <img src="../{{$article->img}}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-12 tm-post-full">                    
                    <h2 class="pt-2 tm-color-primary tm-post-title">{{ $article->title }}</h2>
                    <p class="tm-mb-20">{{ $article->created_at }} posted by {{ $article->author }}</p>
                    <div>{{ $article->content }}</div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>