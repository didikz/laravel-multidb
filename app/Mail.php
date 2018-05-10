<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $connection = 'sqlsrv';

    /**
     * override date format since SQL server has own date format for timestamp fields
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * one to many inversion relationship with Type (mysql2 connection)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_code', 'code');
    }
}
