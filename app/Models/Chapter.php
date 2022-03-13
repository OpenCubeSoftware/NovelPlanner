<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a chapter in a novel
 *
 * @property string $title;
 * @property string $description;
 * @property string $outcome;
 * @property string $status;
 * @property int $user_id;
 * @property int $novel_id;
 * @property int $order_in_novel
 * @property \Illuminate\Support\Carbon|null $created_at;
 * @property \Illuminate\Support\Carbon|null $updated_at;
 */
class Chapter extends Model
{
    use HasFactory;

    public function scenes()
    {
        return $this->hasMany(Scene::class);
    }

    public function novel()
    {
        return $this->belongsTo(Novel::class);
    }

}
