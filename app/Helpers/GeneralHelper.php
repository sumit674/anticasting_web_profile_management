<?php

namespace App\Helpers;

class GeneralHelper
{
    public static function generateReferenceNumber()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x', mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000, mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff));
    }

    public static function getYoutubeEmbedUrl($url)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        return 'https://www.youtube.com/embed/' . $youtube_id;
    }

    public static function isBase64($s)
    {
        return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
    }

    public static function inAssociativeArray($arr, $key, $value)
    {
        $isInArray = in_array($value, array_column($arr, $key));
        return $isInArray;
    }

    // public static function uploadBase64Image($request, $fieldName)
    // {
    //     $folderPath = public_path() . '/upload/profile/';
    //     $base64Image = explode(';base64,', $request->get($fieldName));
    //     $explodeImage = explode('image/', $base64Image[0]);
    //     $imageType = $explodeImage[1];

    //     $image_base64 = base64_decode($base64Image[1]);
    //     $fileName = uniqid() . '-' . time() . '.' . $imageType;
    //     $file = $folderPath . $fileName;
    //     file_put_contents($file, $image_base64);
    //     return $fileName;
    // }
    public static function base64MimeType($encoded_string)
    {
        $pos = strpos($encoded_string, ';');
        $type = explode(':', substr($encoded_string, 0, $pos))[1];
        // $extension = explode('/', $type)[1];
        return $type;
    }

    public static function getExtension($mimeType)
    {
        $extension = explode('/', $mimeType)[1];
        return $extension;
    }
    public static function uploadOtherFile($fileName, $fileData, $folderPath)
    {
        $base64 = ';base64,';
        $image = "data:application/";
        $image_parts = explode($base64, $fileData);
        $image_type_aux = explode($image, $image_parts[0]);
        $imageType = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $fileName = uniqid() . '-' . time() . '.' . $imageType;
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);
        return $fileName;
    }

    public static function uploadImage($request, $fieldName)
    {
        $folderPath = public_path() . '/upload/profile/';
        $base64Image = explode(';base64,', $request->get($fieldName));
        $explodeImage = explode('image/', $base64Image[0]);
        $imageType = $explodeImage[1];
        $image_base64 = base64_decode($base64Image[1]);
        $fileName = uniqid() . '-' . time() . '.' . $imageType;
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);
        return $fileName;
        
    }
}
