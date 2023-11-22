<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverage extends Model
{
    use HasFactory;
    protected $table = 'coverage';
    public $timestamps = false;
    protected $fillable = [
        'own_damage_theft',
        'bodilly_injured',
        'property_damage',
        'auto_pa_five_seats',
        'aog',
        'rate',
        'sales_agent_id',
        'category_id',
        'provider_id',
    ];

    // You can define relationships or additional logic related to the Coverage model here
}
