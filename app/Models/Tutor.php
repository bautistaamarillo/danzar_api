<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastaname',
        'email',
        'phone_number',
        'dni',                                           
    ];
    public function students(): BelongsToMany
{
    return $this->belongsToMany(Tutor::class,"student_tutors");
}
}

