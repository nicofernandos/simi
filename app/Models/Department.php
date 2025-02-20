<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'departments'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true; 

    protected $fillable = [
        'no_id',
        'name',
        'description',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

}