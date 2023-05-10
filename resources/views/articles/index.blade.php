<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel course</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<x-header />

    <div class="container-fluid">
        <main class="tm-main">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <a href="/articles/create" class="tm-color-primary">CREATE ARTICLE</a>

            <div class="row tm-row">
                @foreach($articles as $article)
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a href="{{ url('articles' , [ 'id' => $article->id ]) }}" class="effect-lily tm-post-link tm-pt-20">
                            <div class="tm-post-link-inner">
                                <img src="{{ $article->img }}" alt="Image" class="img-fluid">                            
                            </div>
                            <h2 class="tm-pt-20 tm-color-primary tm-post-title">{{ $article->title }}</h2>
                        </a>                    
                        <p class="tm-pt-20">
                            {{ $article->content }}
                        </p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>{{ $article->created_at }}</span>
                            <span>by {{ $article->author }}</span>
                        </div>
                    </article>
                @endforeach
            </div>
        </main>
    </div>
</body>
</html>