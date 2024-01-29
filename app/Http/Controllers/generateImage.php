<?php

namespace App\Http\Controllers;

use App\Helper\Replicate;
use Illuminate\Http\Request;

class generateImage extends Controller
{
    //
    public function generate(Request $request){
       
        $request->validate([
            'origin' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'face' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

    
        $api = include(app_path('Helper/GenerateApi.php'));
        foreach ($api as $key => $value) {
            if ($value['id'] == 'faceswap') {
                return  $value['request']($value, $request);
            }
        }
    }

    public function results(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $replicate = new Replicate(env('REPLICATE_API_URL'),env('REPLICATE_API_TOKEN'),null);
        return $replicate->GetImage($request->id);
    }


}
