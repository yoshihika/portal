<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mon_first',
        'mon_second',
        'mon_third',
        'mon_fourth',
        'mon_fifth',
        'tue_first',
        'tue_second',
        'tue_third',
        'tue_fourth',
        'tue_fifth',
        'wed_first',
        'wed_second',
        'wed_third',
        'wed_fourth',
        'wed_fifth',
        'thu_first',
        'thu_second',
        'thu_third',
        'thu_fourth',
        'thu_fifth',
        'fri_first',
        'fri_second',
        'fri_third',
        'fri_fourth',
        'fri_fifth',
    ];
}
