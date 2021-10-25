<?php

namespace App\Traits;
use App\Models\User;
use Illuminate\Http\Request;


trait UserTrait {

    public function create(Request $request) {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = app('hash')->make($request->password);

        if($user->save()) {
            return $this->login($request);
        }
        else{
            return response()->json(['status'=>'error','message'=>'User Not Saved!']);
        }
    }
}
