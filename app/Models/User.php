<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory;
    
    protected $table = 'user';
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    protected $hidden = [
        'password'
    ];

    public function getAuthIdentifierName()
    {
        return 'id'; 
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password; 
    }
    public function getRememberToken()
    {
        return $this->remember_token; 
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; 
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; 
    }
}
