<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents an item of significance in the novel.
 *
 * @property string $title;
 * @property string $description;
 * @property string $significance;
 * @property int $user_id;
 * @property \Illuminate\Support\Carbon|null $created_at;
 * @property \Illuminate\Support\Carbon|null $updated_at;
 */
class Item extends Model
{
    use HasFactory;

    public function scenes()
    {
        return $this->belongsToMany(Scene::class);
    }
}
