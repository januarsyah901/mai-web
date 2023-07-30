<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class baba 
{
    private static $data_id = [
        [
            "title" => "januarsyah",
            "name" => "januarsyah akbar",
            "slug" => "fung_1",
            "jabatan" => "pengurus website"
        ],
        [
            "title" => "pramesti",
            "name" => "pramesti",
            "slug" => "bindo_1",
            "jabatan" => "sekertaris"
        ],
        [
            "title" => "ghifar",
            "name" => "gipar",
            "slug" => "fung_2",
            "jabatan" => "pengurus kesiswaan"
        ],
        [
            "title" => "pramest",
            "name" => "pramesti",
            "slug" => "bindo_2",
            "jabatan" => "sekertaris"
        ],
        [
            "title" => "ghifar",
            "name" => "gipar",
            "slug" => "bindo_3",
            "jabatan" => "pengurus kesiswaan"
        ],
        [
            "title" => "pramesti",
            "name" => "pramesti",
            "slug" => "bindo_4",
            "jabatan" => "sekertaris"
        ],
        [
            "title" => "ghifar",
            "name" => "gipar",
            "slug" => "fung_3",
            "jabatan" => "pengurus kesiswaan"
        ]
        ];
    public static function all()
    {
        return collect(self::$data_id);
    }
    public static function find($slug)
    {
        $guru = static::all();
        return $guru->firstWhere('slug',$slug);
    }
}
