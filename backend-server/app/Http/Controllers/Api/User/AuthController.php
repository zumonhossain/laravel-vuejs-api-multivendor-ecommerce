<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\User\AuthResource;

class AuthController extends Controller{
    public function login(LoginRequest $request){

        $user = User::where('phone', $request->phone)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'phone' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->makeToken($user);
    }

    public function register(RegisterRequest $request){
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
        ]);

        return $this->makeToken($user);
    }


    public function makeToken($user){
        $token =  $user->createToken('user-token')->plainTextToken;
        return (new AuthResource($user))
            ->additional(['meta' => [
                'token' => $token,
                'token_type' => 'Bearer',
            ]]);
    }











}
