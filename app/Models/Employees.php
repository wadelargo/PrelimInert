<?php

namespace App\Models;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    public function department() {
        return $this->belongsTo(Departments::class);
    }

    protected $fillable = [
        'lname',
        'fname',
        'position',
        'department_id',
    ];
}
