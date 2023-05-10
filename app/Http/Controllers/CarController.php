<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', [
            'cars' => $cars,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|min:3|max:100',
            'model' => 'required|min:3|max:100',
            'price' => 'required|integer|multiple_of:1000',
        ]);

        $car = Car::create($validated);
        return redirect("/cars/{$car->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);

        return view('cars.card', [ 
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $car = Car::findOrFail($id);

        return view('cars.edit', [
            'car' => $car,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'brand' => 'required|min:3|max:100',
            'model' => 'required|min:3|max:100',
            'price' => 'required|integer|multiple_of:1000',
        ]);

        $car -> update($validated);
        return redirect("/cars/{$car->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        $car -> delete();

        return redirect("/cars")->with('success', 'Car has been deleted successfully');
    }
}
