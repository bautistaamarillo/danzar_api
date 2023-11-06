<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'category_id',
        'active'
    ];
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Tutor::class,"item_students");
    }
    public function payments(): BelongsToMany
    {
        return $this->belongsToMany(Tutor::class,"item_payments");
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
