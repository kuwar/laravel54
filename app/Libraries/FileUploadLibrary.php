<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FileUploadLibrary
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $imageName
     * @param $uploadPath
     * @param bool $thumb
     * @param bool $small
     * @param array $sizes
     * eg array(
     * 'thumb' => array('width' => 50, 'height' => 50),
     * 'small' => array('width' => 100, 'height' => 100)
     * )
     * @return bool
     */
    public function imageUpload($imageName, $uploadPath, array $sizes = array())
    {
        try {
            $image = $this->request->file($imageName);
            $renamedImageName = time() . '.' . $image->getClientOriginalExtension();

            // Upload default original image
            $originalImageDestinationPath = $uploadPath . "/" . env('IMAGE_ORIGINAL');
            $image->move($originalImageDestinationPath, $renamedImageName);

            // Resizing images if there is options
            if (count($sizes) > 0) {
                $img = Image::make($image->getRealPath());
                $this->imageResize($uploadPath, $renamedImageName, $img, $sizes);
            }

        } catch (ModelNotFoundException $ex) {
            $renamedImageName = false;
        }

        return $renamedImageName;
    }

    public function imageResize($path, $renamedImageName, $img, $sizes)
    {
        foreach ($sizes as $key => $size) {
            $resizedImageDestinationPath = $path . "/" . $key;

            if (!is_dir($resizedImageDestinationPath)) {
                mkdir($resizedImageDestinationPath);
            }

            $img->resize($size['width'], $size['height'], function ($constraint) {
                $constraint->aspectRatio();
            })->save($resizedImageDestinationPath . '/' . $renamedImageName);
        }
    }

}