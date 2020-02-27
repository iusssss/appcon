<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Event extends Model
{
    use softDeletes;
}
