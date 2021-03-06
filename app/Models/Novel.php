<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a novel.
 *
 * @property string $title; //required
 * @property string $subtitle;
 * @property string $author;
 * @property string $description;
 * @property string $genre;
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
        'genre',
        'user_id'
    ];

    public static function getRules()
    {
        return [
            'title' => 'required|string',
            'subtitle' => 'string',
            'author' => 'required|string',
            'description' => 'string',
            'genre' => 'string'
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
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
