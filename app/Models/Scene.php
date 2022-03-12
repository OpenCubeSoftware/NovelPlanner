<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    use HasFactory;

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }
}
