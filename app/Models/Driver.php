<?php

namespace App\Models;


// Name: Wong Yu Sheng
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Contact_No', 'Gender', 'licenseExpirationDate'];
}
