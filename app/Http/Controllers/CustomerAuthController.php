<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CustomerAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::guard('customers')->attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:customers',
            'password' => 'required|confirmed',
            'is_paid' => Rule::in([0, 1])
        ]);

        try {

            $customer = $author = app(CustomerRepository::class)->save(new Customer, $request->all());

            return response()->json(['customer' => $customer, 'message' => 'CREATED'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Registration Failed!'], 409);
        }
    }
}
