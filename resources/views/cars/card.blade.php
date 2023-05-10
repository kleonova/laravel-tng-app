<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Car</title>
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

            <dl class="row">
                <dt class="col-sm-3">Brand</dt>
                <dd class="col-sm-9">{{ $car->brand }}</dd>

                <dt class="col-sm-3">Model</dt>
                <dd class="col-sm-9">{{ $car->model }}</dd>

                <dt class="col-sm-3">Price</dt>
                <dd class="col-sm-9">{{ $car->price }}</dd>
            </dl>

            <div class="row mb-5">
                <form action="{{ route('car.destroy', $car->id) }}" method="post" class="col-12">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ url('cars/edit' , [ 'id' => $car->id ]) }}" class="btn btn-info">Edit</a>
                </form>                    
            </div>

            
        </main>
    </div>
</body>
</html>