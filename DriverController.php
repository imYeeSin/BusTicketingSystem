<?php


namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;


class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Driver::create($input);
        return redirect('drivers')->with('flash_message', 'Driver Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        return view('drivers.show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('drivers.edit')->with('drivers', $driver);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $driver = Driver::find($id);
        $input = $request->all();
        $driver->update($input);
        return redirect('drivers')->with('flash_message', 'Driver Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Driver::destroy($id);
        return redirect('drivers')->with('flash_message', 'Driver deleted!');
    }
}
