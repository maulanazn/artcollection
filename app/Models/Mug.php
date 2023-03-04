<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mug extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'item_name', 'price', 'detail', 'important_information'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
