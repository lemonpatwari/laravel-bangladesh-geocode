<?php

namespace lemonpatwari\bangladeshgeocode\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Division extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['country_id', 'name', 'bn_name', 'status'];

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
