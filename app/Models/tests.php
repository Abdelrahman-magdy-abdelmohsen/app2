<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tests extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = ['name',];
    public function getCreatedAtAttribute($value)
    {
        return date('y:m:d',strtotime($value));
    }
    public function getUpdatedAtAttribute($value)
    {
        return date('y:m:d',strtotime($value));
    }
}
