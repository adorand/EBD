<?php
/**
 * Created by PhpStorm.
 * User: jacques
 * Date: 08/06/17
 * Time: 14:48
 */

namespace App\GraphQL\Serializers;
use App\Slider;

class SliderSerializer extends AbstractSerializer
{
    public function toArray($slider): array
    {
        return [
            'id' => $slider->id,
            'nompage' => $slider->nompage,
            'image' => $slider->image,
            'created_at' => $slider->created_at,
            'updated_at' => $slider->updated_at
        ];
    }
}