<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a location where a scene takes place in the novel.
 * @property string $title;
 * @property string $city;
 * @property string $state;
 * @property string $country;
 * @property string $description;
 * @property int $user_id;
 * @property \Illuminate\Support\Carbon|null $created_at;
 * @property \Illuminate\Support\Carbon|null $updated_at;
 */
class Location extends Model
{
    use HasFactory;

    public function novels()
    {
        return $this->belongsToMany(Novel::class);
    }

    public function scenes()
    {
        return $this->belongsToMany(Scene::class);
    }
}
