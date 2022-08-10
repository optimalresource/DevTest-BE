<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     *  Registration for users
     *
     * @return \Illuminate\Http\Response
     */
    public function registerUser(RegisterUserRequest $request)
    {
        $input = $request->validated();

        try {
            $role = Role::where('name', 'user')->first();
            $input['password'] = Hash::make($input['password']);
            
            $user = User::create([
                'role_id' => $role->id,
                'username' => $input['email'],
                ...$input,
            ]);

            $token = $user->createToken('authToken')->accessToken;
            return response()->json([
                'success' => true,
                'message' => 'Account successfully created.',
                'data' => ['token' => $token, 'user' => $user]
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Error occured while trying to create user account.",
           ], 500);
        }
    }

    public function login(LoginRequest $request)
    {
        $req = $request->validated();

        try {
            $user = User::with('role')->where('email', $req['userid'])
            ->orWhere('username', $req['userid'])
            ->first();

            if ($user) {
                if (Hash::check($req['password'], $user->password)) {
                    $token = $user->createToken('authToken')->accessToken;
                    return response()->json([
                        'success' => true,
                        'data' => ['token' => $token, 'user' => $user]
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'The given data was invalid.',
                        'errors' => ['email' => ['The password or userid is invalid']],
                    ], 422);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'The given data was invalid.',
                    'errors' => ['email' => ['The password or userid is invalid']],
                ], 422);
            }
        }catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Error occured while trying to create user account.",
           ], 500);
        }
    }
}

?>