<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
class Delivery extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;

    protected $guard = "delivery";
}
