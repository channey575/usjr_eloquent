<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['deptid', 'deptfullname', 'deptshortname', 'deptcollid'];

    public function programs() {
        return $this->hasMany(College::class);
    }
}
