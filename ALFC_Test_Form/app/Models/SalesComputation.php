<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesComputation extends Model
{ 
    use HasFactory;
    protected $table = 'sales_computation';
    public $timestamps = false;

    protected $fillable = [
        'sales_agent_id',
        'provider_id',
        'service_category_id',
        'coverage_id',
        'odt_computation',
        'bi_computation',
        'pd_computation',
        'apfs_computation',
        'aog_computation',
        'net_rate',
        'sa_rate',
        'aog_net_rate',
        'aog_rate',
        'net_premium',
        'dst',
        'vat',
        'lgt',
        'rap',
        'gross_premium',
    ];

   
}
