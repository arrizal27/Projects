<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class WallResource extends JsonResource
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
            'user' => new UserResource($this->user),
            'foto' => $this->foto,
            'judul' => $this->judul,
            'desc' => $this->desc,
            'uploaded' => $this->created_at->diffForHumans(),

        ];
    }
}
