<?php

namespace App\Models\studentM;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'mac_address',
        'email',
        'password',
        'name',
        'address',
        'phone',
        'guardian_phone',
        'enroll',
        'photo',
        'status',
        'reg_code',
        'reg_status',
        'expiry_days',
        'renewal_date',
        'presetcode',
        'public_key',
        'private_key',
        'modified',
        'last_login',
        'device_token',
        'auth_token',
        'device_type',
        'device_id',
        'delete_request_at'
    ];
}
