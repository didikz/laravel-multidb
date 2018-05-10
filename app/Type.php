<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $connection = 'mysql';

    public function posts()
    {
        return $this->hasMany(Post::class, 'type_code', 'code');
    }

    public function mails()
    {
        return $this->hasMany(Mail::class, 'type_code', 'code');
    }
}
