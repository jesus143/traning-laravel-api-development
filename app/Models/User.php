<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    ///
    public function addition($a, $b) {

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

//        foreach ([1,2,3,4] as $index => $i) {
//
//            if($index == 0) {
//                dd("testing zero here");
//            }
//            echo "$i";
//
//
//        }

//asdasd
//        dd("Test");
        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        foreach ([1,2,3,4] as $i) {
            echo "$i";
        }

        return ($a + $b);
    }
}
