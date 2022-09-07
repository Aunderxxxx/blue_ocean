<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admins';

}
