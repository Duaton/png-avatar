<?php

namespace duaton\paint;

class Avatar
{
    public const AVATAR_IMAGE_SIZE = 56;

    private $settings;

    public function __construct ( array $avatarSettings = [
        'face' => '', 'hair' => '', 'ears' => '', 'eyes' => '', 'mouth' => '', 'beard' => '', 'nose' => '', ]
    )
    {
        $this->settings = $avatarSettings;
    }

    public function face ( $pathToPng )
    {
        $this->settings[ 'face' ] = $pathToPng;
        return $this;

    }

    public function hair ( $pathToPng )
    {
        $this->settings[ 'hair' ] = $pathToPng;
        return $this;

    }

    public function ears ( $pathToPng )
    {
        $this->settings[ 'ears' ] = $pathToPng;
        return $this;

    }

    public function eyes ( $pathToPng )
    {
        $this->settings[ 'eyes' ] = $pathToPng;
        return $this;

    }

    public function mouth ( $pathToPng )
    {
        $this->settings[ 'mouth' ] = $pathToPng;
        return $this;

    }

    public function beard ( $pathToPng )
    {
        $this->settings[ 'beard' ] = $pathToPng;
        return $this;

    }

    public function nose ( $pathToPng )
    {
        $this->settings[ 'nose' ] = $pathToPng;
        return $this;

    }

    public function save ( $file )
    {
        $x = $y = self::AVATAR_IMAGE_SIZE;

        if ( file_exists($file) ) {
            unlink($file);
        }

        $final_img = imagecreatetruecolor($x, $y);
        imagesavealpha($final_img, TRUE);
        $color = imagecolorallocatealpha($final_img, 0, 0, 0, 127);
        imagefill($final_img, 0, 0, $color);

        foreach ( $this->settings as $path ) {
            $image = imagecreatefrompng($path);
            imagecopy($final_img, $image, 0, 0, 0, 0, $x, $y);
        }

        imagepng($final_img, $file);
        imagedestroy($image);
        imagedestroy($final_img);
    }


}