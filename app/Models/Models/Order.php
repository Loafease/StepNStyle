<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        // Add other columns as needed
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
