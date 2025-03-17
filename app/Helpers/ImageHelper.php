<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as crop;
use Intervention\Image\Facades\Image;
class ImageHelper{


    /**
     * =================== create a slug for a model =======================
     * code taken  from:  https://ourcodeworld.com/articles/read/253/creating-url-slugs-properly-in-php-including-transliteration-support-for-utf-8
     * @param $file      File file to save.
     * @param $path string file path to save.
     * @return string
     * =====================================================================
     */
    public static function save($file,$path){
        $defaultImage="default.jpg";
        // rename image name or file name
        $getImageName = time()."-".str_replace(' ','-',$file->getClientOriginalName());

         if($file->move($path, $getImageName))
             return $getImageName;
         else
             return $defaultImage;
    }
    public static function delete($file,$path)
    {
        return File::delete(public_path()."/".$path.$file);
    }
    public static function copy($from_path,$file,$to_path)
    {

            $getImageName = 'Image' . rand(11111, 99999) . time() . '.png' ;
            File::copy(public_path()."/".$from_path.$file,public_path()."/".$to_path.$getImageName);
            return $getImageName;
    }
    public static function save_api($image,$path){
            $arr=explode(';base64,', $image);
            if(isset($arr[1])){
                $image=$arr[1];
                $image = str_replace(' ', '+', $image);
                $data2 = base64_decode($image);
                $profile_name = 'Img' . rand(11111, 99999) . time() . '.png';
                $success = file_put_contents($path.$profile_name, $data2);
                return $profile_name;
            }
            return "0";
    }

    public static function upload($file, $path)
    {
        $img = '';
        $thumb_size = 350;
        $extension = $file->getClientOriginalExtension();
        $getImageName = 'Image' . rand(11111, 99999) . time() . '.' . $extension;

        $img = crop::make($file);
        $img->save(public_path() . '/' . $path . 'large/' . $getImageName);

        $width = $img->width();
        $height = $img->height();

        if ($width > $thumb_size || $height > $thumb_size) {
            if ($width > $height) {
                //$new_size=image_thumb($width,$height,$thumb_size);
                $img->resize($thumb_size, (($height * $thumb_size) / $width));
                $img->save(public_path() . '/' . $path . 'thumb/' . $getImageName);

            } else if ($width < $height) {
                //$new_size=image_thumb($height,$width,$thumb_size);
                $img->resize((($width * $thumb_size) / $height), $thumb_size);
                $img->save(public_path() . '/' . $path . 'thumb/' . $getImageName);

            } else {
                $img->resize($thumb_size, $thumb_size);
                $img->save(public_path() . '/' . $path . 'thumb/' . $getImageName);

            }
        } else {
                $img->save(public_path() . '/' . $path . 'thumb/' . $getImageName);

        }
        return 'thumb/'.$getImageName;
    }

}
