<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mailConfig extends Model
{
    use HasFactory;
    protected $fillable = [ 'Driver','Host','Port','Username','Password','Encryption'];
}
// here i have used fillable because we need to fill it in UI