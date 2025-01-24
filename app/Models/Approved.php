<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approved extends Model
{
    protected $table = "approved";
    protected $fillable = ['accountno','pin'];
}
