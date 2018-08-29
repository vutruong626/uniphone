<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModels extends Model
{
    protected $table = 'status';
    protected $fillable = ['id', 'parent', 'titli', 'text', 'keyword', 'images'];

    
}
