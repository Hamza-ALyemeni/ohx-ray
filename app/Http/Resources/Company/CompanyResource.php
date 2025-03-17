<?php

namespace App\Http\Resources\Company;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'logo' => $this->logo,
            'email' => $this->user->email,
            'country_id' => $this->user->country_id,
            'country_name' => $this->user->country->country_name,
            'location' => $this->user->location,
            'address' => $this->user->address,
            'phone' => $this->user->phone,
            'employees'=>$this->employees,
            'surveys'=>$this->surveys,
        ];
    }
}
