<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursRezervacija extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Datum ' => $this->resource->datumRezervacije,
            'Gost ' => new ResursGost($this->resource->gost),
            'Tip ' => $this->resource->tipRezervacije,
            'Sto ' => new ResursSto($this->resource->sto)
        ];
    }
}
