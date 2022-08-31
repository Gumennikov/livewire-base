<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country; 
use App\Traits\Uuid;

class Continent extends Model
{
    use HasFactory, Uuid;

    protected $primaryKey = 'uuid';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
