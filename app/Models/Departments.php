<?php

namespace App\Models;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;

    public function employees() {
        return $this->hasMany(Employees::class);
    }
}
