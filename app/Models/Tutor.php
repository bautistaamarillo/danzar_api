<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone_number',
        'dni',                                           
    ];
    public function students(): BelongsToMany
{
    return $this->belongsToMany(Tutor::class,"student_tutors");
}
}

