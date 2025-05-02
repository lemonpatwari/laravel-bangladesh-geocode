<?php

namespace lemonpatwari\bangladeshgeocode\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thana extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'bn_name', 'url', 'status', 'district_id'];

    public function district()
    {
        return $this->belongsTo(District::Class);
    }

    public function unions()
    {
        return $this->hasMany(Union::class);
    }
}
