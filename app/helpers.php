<?php

if (!function_exists('assetUrl')) {
    function assetUrl($path)
    {
        return asset("assets/$path");
    }
}
