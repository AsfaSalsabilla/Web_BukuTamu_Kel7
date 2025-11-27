<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tuser extends Model
{
    protected $table = 'tuser';

    protected $primaryKey = 'id_user';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'email',
    ];
}
