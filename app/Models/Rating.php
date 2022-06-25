<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $primaryKey = 'id_rating';
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'foreign_key', 'id_resto');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'id_user');
    }
    protected $fillable = [
        'rate',
        'review',

    ];
}
