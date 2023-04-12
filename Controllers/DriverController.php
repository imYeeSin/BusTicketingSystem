<?php

namespace App\Http\Controllers;

// Name: Wong Yu Sheng

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $drivers = Driver::all();
        return view('drivers.index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        try {
            // Validate the input of contact number
            $validatedData = $request->validate([
                'Contact_No' => 'unique:drivers,Contact_No',
                'licenseExpirationDate' => 'after:today',
                    ], [
                // Error message
                'Contact_No.unique' => 'The contact number already exists. Please enter the new contact number.',
                'licenseExpirationDate.after' => 'The license expiration date must be after today.',
            ]);

            $input = $request->all();
            Driver::create($input);
            return redirect('drivers')->with('flash_message', 'Driver Addedd!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors(['Contact_No' => 'The contact number already exists. Please enter the new contact number.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $driver = Driver::find($id);
        return view('drivers.show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $driver = Driver::find($id);
        return view('drivers.edit')->with('drivers', $driver);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $driver = Driver::find($id);
        $input = $request->all();
        $oldContactNo = $driver->Contact_No; 
        
        try {
            // Validate the input of contact number
            $validatedData = $request->validate([
                'Contact_No' => $oldContactNo === $request->Contact_No ? '' : 'unique:drivers,Contact_No',
                'licenseExpirationDate' => 'after:today',
                    ], [
                // Error message
                'Contact_No.unique' => 'The contact number already exists. Please enter the new contact number.',
                'licenseExpirationDate.after' => 'The license expiration date must be after today.',
            ]);

            $driver->Contact_No = $request->input('Contact_No');
            $driver->save();
            $driver->update($input);
            return redirect('drivers')->with('flash_message', 'Driver Updated!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {

        try {
            Driver::destroy($id);
            return redirect('drivers')->with('flash_message', 'Driver deleted!');
        } catch (QueryException $e) { 
            return redirect('drivers')->with('error_message', 'Error deleting driver: ' . $e->getMessage());
        }
    }

}
