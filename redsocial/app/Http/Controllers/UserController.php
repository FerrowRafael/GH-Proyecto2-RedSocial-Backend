<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // 1 REGISTER
    public function register(Request $request){
        $body = $request->all();
        $body['password'] = Hash::make($body['password']);
        $user = User::create($body);
        return response($user, 201);
    }

    // 2 LOGIN
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return response([
                'message' => 'Wrong Credentials'
            ], 400); //res.status(400).send({'message' : 'Wrong Credentials'})
        }
        $user = $request->user(); //req.user tb podemos utilizar $request->user()
        $token = $user->createToken('authToken')->accessToken;
        return response([
            'user' => $user,
            'token' => $token
        ]);
    }

    // 3 LOGOUT
    public function logout(){
        try {
            dd(Auth::id());
            Auth::user()->token()->revoke();
            return response([
                'message' => 'Usuario desconectado correctamente'
            ]);
        } catch (\Exception $e) {
            return response([
                'message' => 'Ha habido un error al tratar de desconectar.',
                'error' => $e->getMessage()
            ], 500);
        }   
    }

    // 4 GET USERS ALL
    public function getUsersAll(){ 
         $user = User::all();
         return $user->load('likes');
    }

    // 5 GET USERS BY ID
    public function getUserById(Request $request,$id){
        $user = User::find($id);
        return $user;
    }

    // 5 UPDATE USER
    public function userUpdate(Request $request){
        $id = Auth::id();
        $user = User::where('id', $id)->firstOrFail();
        $user->update($request->all());
        return $user;
    }
}