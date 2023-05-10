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
    public static function seoUrl($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, '-');
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    /***
     * @param int $n
     * @return string
     */
    public static function GenerateNumericOTP($n = 4)
    {

        // Take a generator string which consist of
        // all numeric digits
        $generator = "1357902468";

        // Iterate for n-times and pick a single character
        // from generator and append it to $result

        // Login for generating a random character from generator
        //     ---generate a random number
        //     ---take modulus of same with length of generator (say i)
        //     ---append the character at place (i) from generator to result

        $result = "";

        for ($i = 1; $i <= $n; $i++) {
            $result .= substr($generator, (random_int(0, 99999) % (strlen($generator))), 1);
        }

        // Return result
        return $result;
    }

    public static function GenerateRandomString($email)
    {
        return md5(uniqid($email, true));
    }

    //$arr => original array
    //$set => array containing old keys as keys and new keys as values
    public static function recursiveChangeKey($arr, $set)
    {
        if (is_array($arr) && is_array($set)) {
            $newArr = array();
            foreach ($arr as $k => $v) {
                $key = array_key_exists($k, $set) ? $set[$k] : $k;
                $newArr[$key] = is_array($v) ? self::recursiveChangeKey($v, $set) : $v;
                if ($key == 'trans') {
                    $newArr['title'] = $v['name'];
                    $newArr['label'] = $v['name'];
                    unset($newArr['trans']);
                    unset($newArr['parent_id']);
                    unset($newArr['active']);
                    unset($newArr['img']);
                    unset($newArr['imgUrl']);
                    unset($newArr['imgType']);
                    unset($newArr['options']);
                    unset($newArr['order_id']);
                    unset($newArr['created_at']);
                    unset($newArr['updated_at']);
                }
            }
            return $newArr;
        }
        return $arr;
    }

    /***
     * @param $category
     * @return array|null
     */
    public static function getCategoriesIds($category)
    {
        if (!empty($category)) {
            $array = array($category->id);
            if (count($category->children) == 0) {
                return $array;
            } else {
                return array_merge($array, self::getChildrenIds($category->children));
            }
        } else {
            return null;
        }
    }

    /**
     * @param $children
     * @return array
     */
    public static function getChildrenIds($subcategories)
    {
        $array = array();
        foreach ($subcategories as $subcategory) {
            array_push($array, $subcategory->id);
            if (count($subcategory->children)) {
                $array = array_merge($array, self::getChildrenIds($subcategory->children));
            }
        }
        return $array;
    }

    public static function uniqueMultidimensionalArray($array, $key)
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach ($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }


}
