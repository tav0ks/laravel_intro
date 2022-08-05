<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        //Metodo 1
        // $user = new User();
        // $user->name = $requestData['name'];
        // $user->email = $requestData['email'];
        // $user->save();

        //Metodo 2
        // User::create([
        //     'name' => $requestData['name'],
        //     'email' => $requestData['email']
        // ]);

        //Metodo 2 (reduzido)
        User::create($request->all());

        return redirect()->route('users.index');
    }

    public function index()
    {
        $users = User::all();

        return view('users.index', [
            'users' => $users
        ]);
    }
}
