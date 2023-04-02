<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Administrative;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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
    public function store(Request $request) {

        $validation = Validator::make($request->all(), [
                    'Name' => 'required|unique:administrative',
                    'Contact_No' => 'required|max:12|unique:administrative',
                    'Email_Address' => 'required|email|unique:administrative',
                    'User_Name' => 'required|regex:/^\S*$/u|unique:administrative',
                    'Gender' => 'required',
                    'Password' => ['required','string',Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            return redirect('/Administrative/create')->withErrors($validation)->withInput();
        } else {
            Administrative::create($request->all());
            return redirect('/Administrative')->with('flash_message', 'Account Successfully Added!');
        }
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
        $input = $request->all();
        $validator = $this->updateValidation($input);
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

	 public function updateValidation(array $data) {
        return Validator::make($data, [
                    'Name' => 'required|unique:administrative',
                    'Contact_No' => 'required|max:12|unique:administrative',
                    'Email_Address' => 'required|email|unique:administrative',
                    'User_Name' => 'required|regex:/^\S*$/u|unique:administrative',
                    'Password' => ['required','string',Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);
    }

}
