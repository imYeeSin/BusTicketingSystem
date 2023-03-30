<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Administrative;
use Illuminate\Http\Request;

class AdministrativeController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {

        $administrative = Administrative::all();
        return view('Administrative.index')->with('administrative', $administrative);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('Administrative.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $input = $request->all();
        Administrative::create($input);
        return redirect('/Administrative')->with('flash_message', 'Account Successfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {

        $administrative = Administrative::find($id);
        return view('Administrative.show')->with('administrative', $administrative);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {

        $administrative = Administrative::find($id);
        return view('Administrative.edit')->with('administrative', $administrative);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $administrative = Administrative::find($id);
//        $administrative->Name = $request->input('Name');
//        $administrative->Contact_No = $request->input('Contact_No');
//        $administrative->Email_Address = $request->input('Email_Address');
//        $administrative->Designation = $request->input('Designation');
        $input = $request->all();
        $administrative->update($input);
        $administrative->update();
        return redirect('Administrative')->with('flash_message', 'Account Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        Administrative::destroy($id);
        return redirect('Administrative')->with('flash_message', 'Account Successfully deleted!');
    }

}
