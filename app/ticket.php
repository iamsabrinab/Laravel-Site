<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = ['title','content','slugs','status','user_id'];
    
}
