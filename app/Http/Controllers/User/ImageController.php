<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function imagePro()
    {
        return view('user.profile.imagePro');
    }
}
