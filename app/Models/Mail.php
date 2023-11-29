<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mail extends Model
{
    use HasFactory;

    const STATUS = [
        0 => ['label' => '●', 'class' => 'read_off'],
        1 => ['label' => '●', 'class' => 'read'],
    ];

    const WHO = [
        4 => ['label' => '学生室'],
        5 => ['label' => '教務室']
    ];

    public function getIsReadLabelAttribute() {
        $status = $this->attributes['is_read'];

        return self::STATUS[$status]['label'];
    }

    public function getIsReadClassAttribute() {
        $status = $this->attributes['is_read'];

        return self::STATUS[$status]['class'];
    }

    public function getSenderIdNameAttribute() {
        $status = $this->attributes['sender_id'];

        return self::WHO[$status]['label'];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
