<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Administrative extends Model {

    protected $table = 'administrative';
//    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Gender', 'Contact_No', 'Email_Address', 'User_Name', 'Password'];


}
