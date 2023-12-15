<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;
}
