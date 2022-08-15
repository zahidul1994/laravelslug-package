<?php

namespace Sohibd\Laravelslug;

use Illuminate\Support\Str;

class Generate
{
    public static function Slug($string)
    {
        $delimiter = config('laravelslug.separate');
        $string = preg_replace("/[~`{}.'\"\!\@\#\$\%\^\&\*\(\)\_\=\+\/\?\>\<\,\[\]\:\;\|\\\]/", "", $string);
        $string = preg_replace("/[\/_|+ -]+/", $delimiter, trim(strtolower($string)));
        return $string;
    }
    public static function Enslug($string)
    {
        $delimiter = config('laravelslug.separate');
         return Str::slug($string, $delimiter);
    }
    public static function Bnslug($string)
    {
        $delimiter = config('laravelslug.separate');
        $string = preg_replace("/[~`{}.'\"\!\@\#\$\%\^\&\*\(\)\_\=\+\/\?\>\<\,\[\]\:\;\|\\\]/", "", $string);
        $string = preg_replace("/[\/_|+ -]+/", $delimiter, trim(strtolower($string)));
        return $string;
    }
    public static function Abslug($string)
    {
        $delimiter = config('laravelslug.separate');
        $string = trim($string);
        $string = mb_strtolower($string, "UTF-8");;
        $string = preg_replace("/[^a-z0-9_\s\-ءاآؤئبپتثجچحخدذرزژسشصضطظعغفقكکگلمنوهی]/u", $delimiter, $string);
        return $string;
    }
}
