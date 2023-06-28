<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    protected $table = "forms";
    protected $primaryKey = "id";
    protected $fillable = ["name", "last_name", "e_mail", "country"];
}
