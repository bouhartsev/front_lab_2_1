<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function comments(){
        return $this->hasMany(ServiceComment::class, 'article_id');
    }
    
}
