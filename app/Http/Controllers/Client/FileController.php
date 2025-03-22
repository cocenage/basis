<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function showPrivacyPolicy()
    {
        $filePath = public_path('files/privacy.pdf');

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->file($filePath);
    }
}
