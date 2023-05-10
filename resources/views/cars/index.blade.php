<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cars</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<x-header />

    <div class="container-fluid">
        <main class="tm-main">
            @if ($message = Session::get('success'))
                <div class="row tm-row">
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                </div>
            @endif

            <div class="row tm-row mb-5">
                <a href="/cars/create" class="btn tm-btn-primary btn-sm">Create car</a>
                <hr class="tm-hr-primary">
            </div>

            

            <div class="row tm-row">            
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <th scope="row">{{ $car->id }}</th>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->price }} ₽</td>
                                <td>
                                    <a href="{{ url('cars' , [ 'id' => $car->id ]) }}">show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>