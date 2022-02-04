<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterUser;
use App\Models\User;

class RegisterController extends Controller
{

    public function index(){
        return view('account.register');
    }


    public function create( RegisterUser $request ){

        $data = $request->validationData();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect()->route('account.verify-email')->with(['user' => $user]);
    }

    public function verify(){

        return view('account.verify-registration' );
    }
}
