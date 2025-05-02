<?php

namespace lemonpatwari\bangladeshgeocode\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Union extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'bn_name', 'url', 'status', 'thana_id'];
}
