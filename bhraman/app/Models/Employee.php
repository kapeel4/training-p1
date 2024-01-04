<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function getDesignation()
    {
        return $this->hasOne(Designation::class,'id','emp_post_id');
    }
}
