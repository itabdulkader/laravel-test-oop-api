<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserTableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'sort' => $this->sort,
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'group_name' => $this->group_name,
            'city_name' => $this->city_name,
            'active' => $this->active ? 'Active' : 'Inactive',
            'email_verified_at' => $this->email_verified_at

        ];
    }
}
