<?php

namespace App\Services;

class SessionService
{
    public function clearSessionData()
    {
        session()->forget([
            'company',
            'colors',
            'font',
            'category',
            'image',
            'product-id',
            'price',
            'package-name',
            'imgDataURL',
        ]);
    }
}
