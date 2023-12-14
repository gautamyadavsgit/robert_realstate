<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImageModel extends Model
{
    use HasFactory;

    protected $table = 'property_images';
    protected $primaryKey = 'id';
}
