<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Facade;

class ChartsHelper extends Facade
{

    static function chart($type = "bar", $name = 'Label', $width, $height, $options = [], $data, $labels= [], $colors = [])
    {

        $colors = isset($colors)? ChartsHelper::rand_color(count($labels)) : $colors ;
        $chart = app()->chartjs
            ->name($name)
            ->type($type)
            ->size(['width' => $width, 'height' => $height])
            ->labels($labels)
            ->datasets([
                [
                    'backgroundColor' => $colors,
                    'data' => $data
                ]
            ])
            ->options($options);

        return $chart;
    }
    static function rand_color($count = 1)
    {
        $colors =  array();
        for ($x = 0; $x <= $count; $x++) {
            array_push($colors, '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT));
        }
        return $colors;
    }
}
