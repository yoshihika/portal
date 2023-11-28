<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_User extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'user_id', 'course_id', 'week_name'];
}
