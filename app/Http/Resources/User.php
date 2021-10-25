<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'name' => $this->name,
            'email' => $this->email
        ];
    }

    /**
     * @return \string[][]
     */
    public function with($request)
    {
        return[
            'meta' => [
                'status' => 'Active',
                'message' => 'this User Is Authenticated'
            ]
        ];
    }

}
