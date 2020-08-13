<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    //
    protected $fillable = [
        'wo_number','wo_description','employee_id','price','status'
    ];
}
