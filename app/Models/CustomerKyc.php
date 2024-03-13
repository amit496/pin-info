<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerKyc extends Model
{
    use HasFactory;
    protected $table = 'customer_kycs';
    protected $fillable = ['customer_id', 'aadharnumber'];
}
