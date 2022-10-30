<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use app\Models\Laporan;

class Laporan extends model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tanggal',
    ];
}