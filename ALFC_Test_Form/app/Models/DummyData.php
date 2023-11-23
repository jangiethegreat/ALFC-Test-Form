<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DummyData extends Model
{
    use HasFactory;
    protected $table = 'dummy_data';
    public $timestamps = false;
    protected $fillable = [
        'Name',
        'Policy',
        'Address',
        'Birthdate',
        'Birthplace',
        'Contact_No',
        'Company',
        'Position',
        'Existing_Insurance_Provider',
        'Status',
        // Add other fields as necessary
    ];
}
