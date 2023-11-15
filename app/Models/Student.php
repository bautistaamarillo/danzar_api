<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'last_name',
        'address',
        'dni',
        'phone_number', 
        'observations',     
        'birthdate',
        'active'                                     
    ];

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class,"item_students");
    }
    public function tutors(): BelongsToMany
    {
        return $this->belongsToMany(Tutor::class,"student_tutors");
    }
    


    
}
