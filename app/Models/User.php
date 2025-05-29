<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public function fullName()
    {
        return $this->fname . " " . $this->lname;
    }

    public function member()
    {
        return $this->hasOne(Member::class, 'user_id');
    }

    public function getMemberAttribute()
    {
        return $this->member()->firstOrCreate([], [
            'personal_code' => \Illuminate\Support\Str::uuid(),
        ]);
    }

    public function setFnameAttribute($value)
    {
        $this->attributes['fname'] = ucfirst(strtolower($value));
    }

    public function setLnameAttribute($value)
    {
        $this->attributes['lname'] = ucfirst(strtolower($value));
    }
    public function settings()
    {
        return $this->hasOne(UserPrefer::class);
    }

    public function security()
    {
        return $this->hasOne(UserSecurity::class);
    }

    public function notificationsSettings()
    {
        return $this->hasOne(UserNotificationSetting::class);
    }
}