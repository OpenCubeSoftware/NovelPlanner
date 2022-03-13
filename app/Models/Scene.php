<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a scene of a chapter.
 * @property int $user_id;
 * @property string $title;
 * @property int $chapter_id;
 * @property string $status;
 * @property string $type;
 * @property string $plot_level;
 * @property string $description;
 * @property string $notes;
 * @property string $goal;
 * @property string $outcome;
 * @property string $conflict;
 * @property \Illuminate\Support\Carbon|null $date;
 * @property string $pov;
 * @property int $order_in_chapter;
 * @property \Illuminate\Support\Carbon|null $created_at;
 * @property \Illuminate\Support\Carbon|null $updated_at;
 */
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
