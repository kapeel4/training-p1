<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BhramanDetail extends Model
{
    use HasFactory;

    public function getFiscal()
    {
        return $this->hasOne(Fiscalyear::class,'id','fiscal_year');
    }
    public function getEmployee()
    {
        return $this->hasOne(Employee::class,'id','employee_id');
    }
}
