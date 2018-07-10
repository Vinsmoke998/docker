<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    public function users()
    {
        return $this->belongsto('App\users','users_id','id');
    }

}
