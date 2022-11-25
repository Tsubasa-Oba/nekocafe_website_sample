<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cats';

    protected $fillable = 
    [
        'name',
        'birthday',
        'photo_URL',
        'Instagram_URL',
        'cats_type',
        'introduction'
    ];

    public function createCat($cat)
    {
        $this->create([
            'name' => $cat->name,
            'birthday' => $cat->birthday,
            'photo_URL' => $cat->photo_URL,
            'Instagram_URL' => $cat->Instagram_URL,
            'cats_type' => $cat->cats_type,
            'introduction' => $cat->introduction
        ]);
    }
}
