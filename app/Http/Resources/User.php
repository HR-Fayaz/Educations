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
            'id' => (string)$this->id,
            'name' => $this->name,
            'email' => $this->email
        ];
    }

    /**
     * this is for meta data e.g.  status and message
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
