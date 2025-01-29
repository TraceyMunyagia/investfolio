<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $table = "Installment";

    protected $fillable = ['accountno','amount','month'];
}
