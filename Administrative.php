<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class Administrative extends Model implements Authenticatable{
    
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'administrative';
    protected $primaryKey = 'Administrative_ID';
    protected $fillable = ['Name', 'Gender', 'Contact_No', 'Email_Address', 'User_Name', 'Password'];
    
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'Administrative_ID';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->Administrative_ID;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->Password;
    }
}
