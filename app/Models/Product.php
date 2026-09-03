<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'category',
        'condition',
        'stock',
        'image',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    /**
     * Product belongs to a seller/user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
