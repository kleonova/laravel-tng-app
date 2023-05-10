<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create article</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<x-header />

    <div class="container-fluid">
        <main class="tm-main">
            <form method="post" action="/articles" class="mb-5 tm-comment-form">
                @csrf
                <h2 class="tm-color-primary tm-post-title mb-4">Create article</h2>
                <div class="mb-4">
                    <label for="title" class="tm-color-primary">Title</label>
                    <input name="title" id="title" value="{{ old('title') }}" class="form-control" placeholder="Enter title">
                </div>
                <div class="mb-4">
                    <label for="author" class="tm-color-primary">Auhtor</label>
                    <input name="author" id="author" value="{{ old('author') }}" class="form-control" placeholder="Enter author">
                </div>
                <div class="mb-4">
                    <label for="content" class="tm-color-primary">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="6">{{ old('content') }}</textarea>
                </div>
                @if ($errors->any())
                    <hr />
                    <div style="color:red">
                        <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                        </ul>
                    </div>
                    <hr />
                @endif
                <div class="text-right">
                    <button class="tm-btn tm-btn-primary tm-btn-small" type="submit">Submit</button>                        
                </div>                                
            </form>        
        </main>
    </div>
</body>
</html>