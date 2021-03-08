<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoria_tag extends Model
{
    protected $table = 'subcategoria_tag';

    protected $fillable = [
        'subcategoria_id', 'tag_id',
    ];
}
