<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Mail\VerifyUserAccount;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function registerView()
    {
        return view('register');
    }

    public function loginView()
    {
        return view('login');
    }

    public function register(StoreUserRequest $request)
    {

        $data = $request->validated();
        $data['verify_token'] = Str::random(10);
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        // send verify email
        Mail::to($user->email)->send(new VerifyUserAccount(['id' => $user->id, 'verify_token' => $user->verify_token]));

        session()->flash('status', 'Check your mailbox to confirm your account');
        return redirect(route('login-view'));
    }


    public function verifyEmail($userId, $token)
    {
        $user = User::find($userId);
        if ($user->verify_token == $token) {
            $user->update(['verify_token' => NULL]);
            return view('products');
            /* Vuejs code
            $token = $user->createToken('user_registered')->plainTextToken; */
        }
        abort(419);
    }

    public function login(LoginUserRequest $request)
    {
        $request->validated();
        $verifyedUser = User::where('email', $request->email)->where('verify_token', '!=', NULL)->first();

        if (!empty($verifyedUser)) {
            session()->flash('error', 'Email not confirmed');
            return redirect(route('login-view'));
        }
        $checkAuth = auth()->attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$checkAuth) {
            session()->flash('error', 'Email or password is not correct');
            return redirect(route('login-view'));
        }

        session()->flash('status', 'You are logged in successfully');
        return redirect(route('products'));

        /* Vuejs code
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('user_registered')->plainTextToken;
        return response()->json(['message' => 'login successfully', 'user_token' => $token], 200);
        */
    }


    public function logout()
    {
        auth()->logout();
        session()->flash('status', 'logged out successfully');
        return redirect(route('login-view'));
    }
}
