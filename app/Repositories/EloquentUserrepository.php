<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;

class EloquentUserrepository implements IUserrepository
{
    public $userrepository;

    public function __construct(EloquentUserrepository $userrepository)
    {
        $this->userrepository=$userrepository;
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = app('hash')->make($request->password);

        if($user->save()) {
            return (App\Http\Controllers\AuthController::login($request));
        }
        else{
            return response()->json(['status'=>'error','message'=>'User Not Saved!']);
        }
    }
}
