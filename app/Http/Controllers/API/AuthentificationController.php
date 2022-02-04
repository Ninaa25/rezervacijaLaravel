<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AuthentificationController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('reg_TOKEN')->plainTextToken;

        $odgovor = [
            'USER: ' => $user,
            'REG TOKEN: ' => $token,
        ];

        return response()->json($odgovor);
    }




    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['MESSAGE: ' => 'Try again!']);
        } else {
            $token = $user->createToken('login_TOKEN')->plainTextToken;
            $odgovor = [
                'USER: ' => $user,
                'LOGIN TOKEN: ' => $token
            ];

            return response()->json($odgovor);
        }
    }



    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Logout successfully!');
    }
}
