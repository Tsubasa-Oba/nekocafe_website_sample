<?php

namespace App\Services;

use App\Models\Cat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CatService
{
    public function saveCats(string $name, mixed $birthday, mixed $photo_URL, string $Instagram_URL,  string $cats_type, string $introduction)
    {      
        $cat = new Cat;
        $cat->name = $name;
        $cat->birthday = $birthday;
        $cat->Instagram_URL = $Instagram_URL;
        $cat->photo_URL = $photo_URL->hashName();
        $cat->cats_type = $cats_type;
        $cat->introduction = $introduction;
        $cat->save();

        Storage::putFile('public/images', $photo_URL);
    }
}