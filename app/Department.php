<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Department extends Model
{
    protected $fillable = array('name');

    public function employee() {
        return $this->hasMany('Employee');
    }

}
