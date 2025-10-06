<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['company_name', 'address','contact_number', 'contact_person'];
    public $timestamps = false;

}

