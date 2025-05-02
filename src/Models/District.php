<?php

namespace lemonpatwari\bangladeshgeocode\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name', 'bn_name', 'lat', 'lon', 'url', 'status', 'division_id'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function thanas()
    {
        return $this->hasMany(Thana::class);
    }
}
