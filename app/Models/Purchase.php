<?php

// app/Models/Purchase.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'national_id',
        'email',
        'contact_number',
        'manufacturer',
        'model',
        'year',
    ];
}

