<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function signup()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->with('failed', 'Ada Kesalahan dalam Input Data');
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan dalam Input Data',
                'data' => $validator->errors()
            ]);
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            $success['name'] = $user->name;
            $success['email'] = $user->email;

            return redirect()->route('login');
            return response()->json([
                'success' => true,
                'message' => 'Registrasi Sukses Dilakukan',
                'data' => $success
            ]);
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['email'] = $auth->email;

            return redirect()->route('dashboard');
            return response()->json([
                'success' => true,
                'message' => 'Login Berhasil Dilakukan',
                'data' => $success
            ]);
        } else {
            return redirect()->route('login')->with('failed', 'Ada Kesalahan pada E-mail dan Password');
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan pada Email dan Password',
                'data' => null
            ]);
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda Berhasil Logout');
    }
}
