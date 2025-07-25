<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customerRequest extends Model
{
    protected $table='customer_request';
    protected $fillable =['firstName','lastName','email','phone','date','time','seats','anyRequest'];
}
