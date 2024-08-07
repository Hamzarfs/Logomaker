<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ImageService
{
    public function compressAndStoreImage(UploadedFile $image, $uniqueSlug, $type)
    {
        $extension = $image->getClientOriginalExtension();

        if ($extension === 'svg' || $extension === 'svgz') {
            return $this->storeSvgImage($image, $uniqueSlug, $type);
        } else {
            return $this->storeCompressedImage($image, $uniqueSlug, $type);
        }
    }

    private function storeCompressedImage(UploadedFile $image, $uniqueSlug, $type)
    {
        $compressedImage = imagecreatefromstring(file_get_contents($image->getRealPath()));
        $extension = 'webp'; // or any other desired extension
        $filename = $uniqueSlug . '.' . $extension;

        // Determine save path based on the type
        $savePath = $this->getSavePath($type, $filename);

        imagewebp($compressedImage, $savePath, 45); // Adjust quality as needed
        imagedestroy($compressedImage);

        return $filename;
    }

    private function storeSvgImage(UploadedFile $image, $uniqueSlug, $type)
    {
        $filename = $uniqueSlug . '.svg';
        $savePath = $this->getSavePath($type, $filename);

        $image->move(dirname($savePath), basename($savePath));

        return $filename;
    }

    private function getSavePath($type, $filename)
    {
        switch ($type) {
            case 'product':
                return public_path('category-image/' . $filename);
            case 'collection':
                return public_path('collection-image/' . $filename);
            case 'slider':
                return public_path('product-slider-images/' . $filename);
            default:
                return public_path('upload-image/' . $filename);
        }
    }

    public function convert(UploadedFile $image, $uniqueSlug, $type, $path, $extension)
    {
        $compressedImage = imagecreatefromstring(file_get_contents($image->getRealPath()));
        if (!$compressedImage) {
            // Handle the error or return false
            return false;
        }

        if (!$extension) {
            $extension = 'webp';
        }
        $filename = $uniqueSlug . '.' . $extension;

        $savePath = public_path($path . '/' . $type . '/' . $filename);
        $directory = dirname($savePath);

        if (!file_exists($directory) && !mkdir($directory, 0755, true)) {
            // Handle directory creation failure
            return false;
        }

        imagewebp($compressedImage, $savePath, 100); // Adjust quality as needed
        imagedestroy($compressedImage);

        return $filename;
    }
}
