<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MemberResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
           'data' => $this->collection->transform(function ($data) {
                return [
                    'id' => $data->id,
                    'full_name' => $data->first_name.' '.$data->last_name,
                    'gender' => $data->gender,
                    'user_type' => $data->user_type
                ];
           })
        ];
    }
}
