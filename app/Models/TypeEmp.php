<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEmp extends Model
{
    use HasFactory;
    protected $table = 'natureemp';
    protected $primaryKey = 'id_nature';
    public $timestamps = false;
}
