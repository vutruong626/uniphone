<?php

namespace App\Models;

use App\Models\Base;

class User extends Base
{
    protected $table = "users";
    protected $guarded = [''];
}
