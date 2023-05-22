<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    protected $fillable = ['name','email','website','logo'];
    use HasFactory;
    use Notifiable;

}
