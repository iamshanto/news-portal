<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Repositories\AuthorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthorAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::guard('authors')->attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:authors',
            'password' => 'required|confirmed',
            'is_professional' => Rule::in([0, 1])
        ]);

        try {
            $author = app(AuthorRepository::class)->save(new Author, $request->all());
            return response()->json(['author' => $author, 'message' => 'CREATED'], 201);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Registration Failed!'], 409);
        }

    }
}
