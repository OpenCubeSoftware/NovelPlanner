<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a character in the novel.
 *
 * @property string $display_name;
 * @property string $given_name;
 * @property string $surname;
 * @property string $gender;
 * @property string $type;
 * @property string $plot_type;
 * @property int $age;
 * @property string $birthplace;
 * @property string $education_level;
 * @property string $political_views;
 * @property string $religious_views;
 * @property string $description;
 * @property string $physical_description;
 * @property string $bio;
 * @property string $goals;
 * @property string $conflict;
 * @property string $evolution;
 * @property int $user_id;
 * @property \Illuminate\Support\Carbon|null $created_at;
 * @property \Illuminate\Support\Carbon|null $updated_at;
 */
class Character extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function novels()
    {
        return $this->belongsToMany(Novel::class);
    }

    public function scenes()
    {
        return $this->belongsToMany(Scene::class);
    }
}
