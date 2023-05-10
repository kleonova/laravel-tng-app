<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Car`s create form</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<x-header />

    <div class="container-fluid">
        <main class="tm-main">
            <div class="row mb-5">
                <div class="col-12">
                    <a href="/cars">Back to cars</a>
                </div>
            </div>
            
            <form method="post" action="/cars" class="mb-5 tm-comment-form">
                @csrf
                <h2 class="tm-color-primary tm-post-title mb-4">Create car</h2>
                <div class="mb-4">
                    <label for="brand" class="tm-color-primary">Brand</label>
                    <input type="text" name="brand" id="brand" value="{{ old('brand') }}" class="form-control" placeholder="Enter brand">                    
                    @error('brand')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="model" class="tm-color-primary">Model</label>
                    <input type="text" name="model" id="model" value="{{ old('model') }}" class="form-control" placeholder="Enter model">
                    @error('model')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="price" class="tm-color-primary">Price</label>
                    <input type="number" name="price" id="price" value="{{ old('price') }}" class="form-control" placeholder="Enter price">
                    @error('price')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="text-right">
                    <button class="tm-btn tm-btn-primary tm-btn-small" type="submit">Submit</button>                        
                </div>                                
            </form>
        </main>
    </div>
</body>
</html>