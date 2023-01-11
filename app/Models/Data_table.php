<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_table extends Model
{
    public $table = 'data';
    public $primaryKey = 'id';
    public $incrementing = true;
    public$timestamps=false;
}
