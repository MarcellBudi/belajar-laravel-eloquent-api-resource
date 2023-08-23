<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Product
 */

class ProductDebugResource extends JsonResource
{

    // public $additional = [
    //     "author" => "Marcell Budi Putra"
    // ];

    public static $wrap = "data";

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        
        // return [
        //     "id" => $this->id,
        //     "name" => $this->name,
        //     "price" => $this->price
        // ];

        return [
            "author" => "Marcell Budi Putra",
            "server_time" => now()->toDateTimeString(),
            "data" => [
                "id" => $this->id,
                "name" => $this->name,
                "price" => $this->price
            ]
        ];
    }
}
