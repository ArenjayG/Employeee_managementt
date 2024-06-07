<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    // If your table name is different from the default 'employees'
    protected $table = 'employeees_tbl';

    // Specify which fields are mass assignable
    protected $fillable = [
        'emp_name',
        'emp_name2',
        'password'
        
    ];
}
