<?php

namespace App\Http\Controllers;

use App\Traits\UserTrait;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\User as UserResource;


class AuthController extends Controller
{
    use UserTrait;      //  This trait ss used for Model's Isolation from Controller

    /**
     * User Registering For Authentication
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {

        $name=$request->name;
        $email=$request->email;
        $password=$request->password;

        if(empty($name) or empty($email) or empty($password)){
            return response()->json(['status' => 'error', 'message' => 'All Input Is Required!']);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['status' => 'error', 'message' => 'Invalid Email Address!']);
        }

        if(strlen($password)<6)
        {
            return response()->json(['status' => 'error', 'message' => 'Password must be Greater than 5 character']);
        }

        if (User::where('email', '=', $email)->exists()) {
            return response()->json(['status'=>'error','message'=>'User Already Exists!']);
        }

        try{
            return $this->create($request);               // This Method Calling Is From Trait Not Model
        }catch (\Exception $er) {
            return response()->json(['status' => 'error', 'message' => $er->getMessage()]);
        }
    }


    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return new UserResource(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

     /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
           // 'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
