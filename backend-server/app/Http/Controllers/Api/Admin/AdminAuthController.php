<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\Admin\AdminAuthResource;
use App\Models\Admin;

class AdminAuthController extends Controller{
    public function login(AdminLoginRequest $request){

        $user = Admin::where('phone', $request->phone)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'phone' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->makeToken($user);
    }

    public function makeToken($user){
        $token =  $user->createToken('admin-token')->plainTextToken;
        return (new AdminAuthResource($user))
            ->additional(['meta' => [
                'token' => $token,
                'token_type' => 'Bearer',
            ]]);
    }

    public function user(Request $request){
        return AdminAuthResource::make($request->user());
    }
    
    public function logout(Request $request){

        $request->user()->tokens()->delete();
        return send_ms('Admin Logoout', true, 200);

    }

}
