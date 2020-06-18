<?php

namespace App\Http\Resources;

use App\Http\Resources\Category as CategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Estrella extends JsonResource {
    public function toArray($request) {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'video' => [
                'isPlaying' => false,
                "options" => [
                    'muted' => false,
                    'language' => "en",
                    'controls' => false,
                    'preload' => "none",
                    'poster' => ".." . $this->avatar,
                    'sources' => [
                        ['type' => "video/mp4", 'src' => ".." . $this->video_src]
                    ],
                ]
            ],
            'avatar' => $this->avatar,
            'categories' => CategoryResource::collection($this->categories),
        ];
    }
}
