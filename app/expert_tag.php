<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expert_tag extends Model
{

  protected $table = 'expert_tag';

  protected $fillable = [
    'expert_id', 'tag_id',
  ];
}
