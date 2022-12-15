<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inletter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tanggal'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'random_id';
    }
}