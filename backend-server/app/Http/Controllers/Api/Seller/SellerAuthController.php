<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\SellerLoginRequest;
use App\Http\Resources\Seller\SellerAuthResource;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SellerAuthController extends Controller{
    public function login(SellerLoginRequest $request)
    {
        $seller = Seller::where('phone', $request->phone)->first();
        if (!$seller || !Hash::check($request->password, $seller->password)) {
            throw ValidationException::withMessages([
                'phone' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->makeToken($seller);
    }


    public function makeToken($seller)
    {
        $token =  $seller->createToken('seller-token')->plainTextToken;
        return (new SellerAuthResource($seller))
            ->additional(['meta' => [
                'token' => $token,
                'token_type' => 'Bearer',
            ]]);
    }


    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return send_ms('seller logout', true, 200);
    }

    public function user(Request $request)
    {
        return SellerAuthResource::make($request->user());
    }
}
