<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';
    protected $primaryKey = 'id_resto';

    protected $fillable = [
        'name_resto',
        'desc_resto',
        'category',
        'alamat_resto',
        'longitude',
        'latitude',
        'imageLink',
        'googleMapsLink'

    ];
}
