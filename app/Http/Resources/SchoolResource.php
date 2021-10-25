<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
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
            'city' => $this->city,
            'address' => $this->address,
            'telephone' => $this->telephone
        ];
    }

    /**
     * this is for meta data e.g. status and message
     * @return \string[][]
     */
    public function with($request)
    {
        return[
            'meta' => [
                'status' => 'true',
                'message' => 'this Operation is successfully done about Student(s)'
            ]
        ];
    }
}
