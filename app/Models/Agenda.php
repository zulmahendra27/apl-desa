<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['waktu'];

    public function getRouteKeyName()
    {
        return 'random_id';
    }
}