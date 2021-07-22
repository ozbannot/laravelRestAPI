<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//dd($this->collection);
        // return parent::toArray($request);
        return [
            'login_id' => $request->login_id, 
            'ga_id' => $request->ga_id,
            'product_list' => $this->tax,
        ];
    }
}
