<?php

namespace App;

if (!function_exists('save_image')) {
    function save_image($image)
    {
        $name = time() . $image->getClientOriginalName();
        $image->storeAs('public/images', $name);
        return $name;
    }
}

