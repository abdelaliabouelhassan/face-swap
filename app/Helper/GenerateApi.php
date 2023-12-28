<?php

namespace App\Helper;

use App\Helper\Replicate;

return array(
    array(
        "id" => "faceswap",
        "url" => env('REPLICATE_API_URL'),
        "token" => env('REPLICATE_API_TOKEN'),
        "version" => "d5900f9ebed33e7ae08a07f17e0d98b4ebc68ab9528a70462afc3899cfe23bab",
        "request" => function ($data, $request) {
            $Replicate  = new Replicate($data['url'], $data['token'], $data['version']);
            return $Replicate->generate($request->face,$request->origin);
        }
    ),
);
