<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $connection = 'mysql2';

    /**
     * one to many relationship with Post (mysql connection)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'type_code', 'code');
    }

    /**
     * one to many relationship with Mail (sqlsrv connection)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mails()
    {
        return $this->hasMany(Mail::class, 'type_code', 'code');
    }
}
