<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a novel.
 *
 * @property string $title;
 * @property string $subtitle;
 * @property string $author;
 * @property string $description;
 * @property int $user_id;
 * @property \Illuminate\Support\Carbon|null $created_at;
 * @property \Illuminate\Support\Carbon|null $updated_at;
 */
class Novel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'author',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
