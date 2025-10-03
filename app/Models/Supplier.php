<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['CompanyName', 'CompanyAddress','ContactNumber', 'ContactPerson'];
    public $timestamps = false;
}

