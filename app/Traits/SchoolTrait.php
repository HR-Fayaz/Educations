<?php

namespace App\Traits;
use App\Http\Resources\SchoolResource;
use App\Models\school;
use Illuminate\Http\Request;


trait SchoolTrait {

    /**
     * Trait Method for School Record Creating
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request) {

        $school = new school();
        $school->name = $request->name;
        $school->city = $request->city;
        $school->address = $request->address;
        $school->telephone = $request->telephone;

        if($school->save()) {
            return new SchoolResource($request);
        }
        else{
            return response()->json(['status'=>'error','message'=>'School Information Dose Not Saved Successfully!']);
        }
    }

    public function listschools() {

        $school = school::all();

        if($school) {
            return SchoolResource::collection($school);
        }
        else{
            return response()->json(['status'=>'error','message'=>'School Information Dose Not Saved Successfully!']);
        }
    }


}

