<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminAuthController extends Controller {

   public function adminLogin(Request $request) {
    $credentials = $request->validate([
        'adminID' => 'required|integer',
        'password' => 'required|string',
    ]);

    $newCredentials = [
        'Administrative_ID' => $credentials['adminID'],
        'Password' => $credentials['password']
    ];

    if (Auth::guard('admin')->attempt($newCredentials)) {
        $request->session()->put('adminID', $newCredentials['Administrative_ID']);
        return redirect('/Home');
    } else {
        return redirect()->back()->withErrors(['password' => 'Invalid Admin ID or Password']);
    }
}


}
