<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{

    public function index()
    {
        $data['flights'] = Flight::all();
        return view('flights.index', $data);
    }

    public function store(Request $request)
    {

        $flight = new Flight;
        $flight->name = $request->input('name');
        $flight->airline = $request->input('airline');
        $flight->number_of_seats = $request->input('number_of_seats');
        $flight->price = $request->input('price');
        $flight->save();

        return redirect('/flights');
    }


    public function edit(string $id)
    {
        $data['flight_update'] = Flight::find($id);
        $data['flights'] = Flight::all();

        return view('flights.update', $data);
    }


    public function update(Request $request, string $id)
    {
        //

        $flight = Flight::find($id);
        $flight->name = $request->input('name');
        $flight->airline = $request->input('airline');
        $flight->number_of_seats = $request->input('number_of_seats');
        $flight->price = $request->input('price');
        $flight->save();

        return redirect('/flights');

    }


    public function destroy(string $id)
    {
        $flight = Flight::find($id);
        $flight->delete();
        return redirect('/flights');
    }
}
