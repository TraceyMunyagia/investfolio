<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $table = "investors";

    protected $fillable = [
        "surname",
        "firstname",
        "othernames",
        "email",
        "phone",
        "national_id",
        "kra_pin",
    ];
}
