<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';


    protected $fillable = 
    [
        'name',
        'admin_id',
        'admin_pass',
        'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'admin_pass',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->admin_pass;
    } 

    public function createAdmin($admin)
    {
        $this->create([
            'name' => $admin->name,
            'admin_id' => $admin->admin_id,
            'admin_pass' => $admin->admin_pass,
            'type' => $admin->type,
        ]);
    }
}
