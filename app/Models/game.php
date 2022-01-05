<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'platform' ,
        'developer',
        'publisher',
        'gid'
    ];

    public function genres()
    {
        return $this->belongsTo('App\Models\genre','gid','id');
    }
    public function scopePlatforma($query,$platform)
    {
        $query->where('gid','=',7);
    }
    public function scopePlatformb($query,$platform)
    {
        $query->where('gid','=',4);
    }
    public function scopePlatformc($query,$platform)
    {
        $query->where('gid','=',9);
    }
    public function scopePlatformd($query,$platform)
    {
        $query->where('gid','=',14);
    }
    public function scopePlatforme($query,$platform)
    {
        $query->where('gid','=',21);
    }
}
