<?php

namespace App\Services;

use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Log;

class CloudinaryService
{
    protected $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);
    }

    public function uploadImage($file, $options = [])
    {
        Log::info('CloudinaryService@uploadImage');
        Log::info('options: '. json_encode($options));
        return $this->cloudinary->uploadApi()->upload($file, $options);
    }

    public function deleteImage($publicId)
    {
        Log::info('Delete image');
        Log::info('publicId: '. json_encode($publicId));
        return $this->cloudinary->uploadApi()->destroy($publicId);
    }
}