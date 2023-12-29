<?php


namespace App\Helper;

use App\Models\GeneratedImage;
use App\Models\GeneratedImageLog;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class Replicate
{
    private $url;
    private $token;
    private $version;

    public function __construct($url, $token, $version)
    {
        $this->url = $url;
        $this->token = $token;
        $this->version = $version;
    }

    public function generate($face,$origin)
    { 
       
        try {
            $origin =  $this->stroeImage($origin);
            $face = $this->stroeImage($face);
            $face =  url('/') . $face;
            $origin =  url('/') . $origin;
           

            $response = Http::withHeaders([
                'Authorization' => 'Token ' . $this->token,
                'Content-Type' => 'application/json',
            ])->post($this->url, [
                'version' => $this->version,
                'input' => [
                    'weight' => 0.5,
                    'cache_days' => 10,
                    'det_thresh' => 0.1,
                    'request_id' => 'aa6a2aad-90ec-4c00-b90b-89f4d62e6b84',
                    // "local_source" => $face,
                    // "local_target" => $origin,
                     'target_image' => $origin,
                     'source_image' => $face,
                    //  'source_image' => 'https://replicate.delivery/pbxt/JkUYWp60oNwz1SF9AJvJPv7upLqucTyaeCxQ07qZGijlDKxt/face_swap_09.jpg',
                ],
            ])->throw(); // throw exception if status code is not  in the 200-299 range;
        
            // Access the response content
            $response = $response->json();
           
           return response()->json(['type'=>'replicate','status'=> $response['status'],'id'=>$response['id']], 200);

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }


  


    
    public function get($id)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Token ' . $this->token,
                'Content-Type' => 'application/json'
            ])->get($this->url . '/' . $id);

            if ($response->successful()) {
                return $response->json();
            } else {
                throw new \Exception('Failed to get data. Status code: ' . $response->status());
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    

    public function GetImage($id){
        $results =  $this->get($id);
        if($results['status'] == 'starting' || $results['status'] == 'processing'){
            return response()->json(['type'=>'replicate','status' => $results['status'], 'images' => [], 'replicate_id' => $id], 200);
        }else if($results['status'] == 'succeeded'){
            $image = $results['output']['image'];
           


            return response()->json(['type'=>'replicate','status' => $results['status'], 'images' => $image, 'replicate_id' => $id], 200);
        }
    }


    private function stroeImage($request)
    {
      
        $imageName =  time().'_' . Str::random(10) . '_'. '.' . $request->extension();
        $request->move(public_path('uploads'), $imageName);

       return  '/uploads/' .  $imageName;
    }







}
