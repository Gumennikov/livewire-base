<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Country extends Model
{
    use HasFactory, Uuid;

    protected $primaryKey = 'uuid';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
