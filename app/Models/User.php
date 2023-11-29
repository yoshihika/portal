<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'password'];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class)->withPivot('name');
    }

    public function mails(): HasMany
    {
        return $this->hasMany(Mail::class);
    }
}
