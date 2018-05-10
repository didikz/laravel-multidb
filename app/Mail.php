<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $connection = 'sqlsrv';

    protected $dateFormat = 'Y-m-d H:i:s';

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_code', 'code');
    }
}
