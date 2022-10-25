<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = 
    [
        'name',
        'admin_id',
        'admin_pass',
        'auth_type'
    ];

    public function createAdmin($admin)
    {
        $this->create([
            'name' => $admin->name,
            'admin_id' => $admin->admin_id,
            'admin_pass' => $admin->admin_pass,
            'auth_type' => $admin->auth_type
        ]);
    }
}
